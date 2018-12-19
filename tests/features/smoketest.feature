@api
Feature: Smoke test.
    In order to be have a drupal 8 template project

    Scenario: Create a development site and login as administrator
        Given I am logged in as a user with the administrator role
        When I visit "admin/modules"
        Then I should see the button "Install"
