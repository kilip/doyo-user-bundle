Feature: Resetting password
  In order to logged in again
  As User
  I should able to reset my password

  Background:
    Given My username is toni

  Scenario: Successfully request to reset password
    Given My username is toni
    And I never request password
    When I send a JSON "POST" request to "/reset-password/request" with body:
    """
    {
      "username": "toni"
    }
    """
    Then the response status code should be 200
    And the JSON should be a superset of:
    """
    {
      "message": "Please check your mail at 'toni@test.com' to continue reset password"
    }
    """
    And an email should be sent to "toni@test.com"

  Scenario: Request reset password with non existent user
    When I send a JSON "POST" request to "/reset-password/request" with body:
    """
    {
      "username": "foo"
    }
    """
    Then the response status code should be 404
    And the JSON should be a superset of:
    """
    {
      "message": "A username\/email 'foo' not found."
    }
    """

  Scenario: Request email with non expired request
    Given I have request reset password
    When I send a JSON "POST" request to "/reset-password/request" with body:
    """
    {
      "username": "toni"
    }
    """
    Then the response status code should be 406
    And the JSON should be a superset of:
    """
    {
      "message": "An email contain reset password link already sent to 'toni@test.com'"
    }
    """

  Scenario: Request email with an expired token request
    Given I have an expired request reset password
    When I send a JSON "POST" request to "/reset-password/request" with body:
    """
    {
      "username": "toni"
    }
    """
    Then the response status code should be 200
    And the JSON should be a superset of:
    """
    {
      "message": "Please check your mail at 'toni@test.com' to continue reset password"
    }
    """
    And an email should be sent to "toni@test.com"

  Scenario: Create new password
    Given I post a JSON request for new password with password "foo"
    Then the response status code should be 200
    And the JSON should be a superset of:
    """
    {
      "message": "Password changed"
    }
    """