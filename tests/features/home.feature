Feature: Home

    Scenario Outline: Components
        Given I load the website
        When I go to "/" page
        Then I see this component "<rows>"
        Examples:
            | rows             |
            | hello            |

