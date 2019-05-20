@createSchema
Feature: User management
  In order to manage application users
  As an application Administrator
  I should able to manage application users

  Background:
    Given I have logged in as admin

  Scenario: Creates new user
    Given I don't have user with username "foo"
    And I send a JSON "POST" request to "/api/users" with body:
    """
    {
      "username": "foo",
      "email": "foo@bar.com",
      "plainPassword": "foobar",
      "fullName": "Foo Bar",
      "roles": [],
      "groups": []
    }
    """
    Then the response status code should be 201
    And the JSON should be a superset of:
    """
    {
      "fullName": "Foo Bar",
      "username": "foo",
      "email": "foo@bar.com",
      "enabled": false,
      "lastLogin": null,
      "groups": [],
      "roles": [
          "ROLE_USER"
      ]
    }
    """

  Scenario: Update user data
    Given there are 1 dummy users
    When I send a JSON "PUT" request to "/api/users/dummy1" with body:
    """
    {
      "username": "dummy_changed",
      "email": "dummy@changed.com",
      "enabled": true
    }
    """
    Then the response status code should be 200
    And the JSON should be a superset of:
    """
    {
      "username": "dummy_changed",
      "email": "dummy@changed.com",
      "enabled": true
    }
    """

  Scenario: Remove existing user
    Given there are 2 dummy users
    When I send a JSON "DELETE" request to "/api/users/dummy1" with body:
    Then the response status code should be 204

  @createSchema
  Scenario: Get a collection of users
    Given there are 2 dummy users
    When I send a JSON "GET" request to "/api/users?order[username]=asc"
    Then the response status code should be 200
    And the response should be in JSON
    And the JSON should be a superset of:
    """
    [
      {
        "username": "admin"
      },
      {
        "fullName": "Dummy User #1",
        "username": "dummy1",
        "email": "dummy1@test.com"
      },
      {
        "fullName": "Dummy User #2",
        "username": "dummy2",
        "email": "dummy2@test.com"
      }
    ]
    """