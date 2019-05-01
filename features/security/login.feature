Feature: Security
  In order to using application
  As User
  I should able to access restricted page

  Scenario: Login to application
    Given there is an admin user with username admin and password admin
    When I send a JSON "POST" request to "/login-check" with body:
    """
    {
      "username": "admin",
      "password": "admin"
    }
    """
    Then the response status code should be 200
    And the JSON node "token" should exist

  Scenario: Login with invalid password
    Given there is an admin user with username admin and password admin
    When I send a JSON "POST" request to "/login-check" with body:
    """
    {
      "username": "admin",
      "password": "bar"
    }
    """
    Then the response status code should be 401

  Scenario: Access restricted resource without login
    Given I send a JSON "GET" request to "/api/users"
    Then the response status code should be 401

  Scenario: Access resource without required role
    Given there are 1 dummy users
    And I have logged in with username "dummy1"
    When I send a JSON "GET" request to "/api/users"
    Then the response status code should be 403
    And the JSON should be a superset of:
    """
    {
      "detail": "Access Denied."
    }
    """