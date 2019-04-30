Feature: User management

  Scenario: Creates new user
    Given I don't have user with username "foo"
    When I add "Content-Type" header equal to "application/json"
    And I add "Accept" header equal to "application/json"
    And I send a "POST" request to "/api/users" with body:
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

  @createSchema
  Scenario: Get a collection of users
    Given there are 2 dummy users
    When I send a "GET" request to "/api/users.json?order[username]=asc"
    Then the response status code should be 200
    And the response should be in JSON
    And the JSON should be a superset of:
    """
    [
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