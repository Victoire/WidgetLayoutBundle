@mink:selenium2 @alice(Page) @reset-schema
Feature: Manage a Layout widget

    Background:
        Given I am on homepage

    Scenario: I can create a new Layout widget
        When I switch to "layout" mode
        Then I should see "New content"
        When I select "Columns" from the "1" select of "main_content" slot
        Then I should see "Widget (Columns)"
        And I should see "1" quantum
        When I follow "xs" layout config
        And I select "once" from "_a_static_widget_layout[layoutXs]"
        And I follow "sm" layout config
        And I select "once" from "_a_static_widget_layout[layoutSm]"
        And I follow "md" layout config
        And I select "half" from "_a_static_widget_layout[layoutMd]"
        And I follow "lg" layout config
        And I select "half" from "_a_static_widget_layout[layoutLg]"
        And I check the "_a_static_widget_layout[hasContainer]" checkbox
        And I submit the widget
        Then I should see the success message for Widget edit
        When I reload the page
        Then I should find "2" columns with xs "12" sm "12" md "6" and lg "6" with a container

    Scenario: I can update an Layout widget
        Given the following WidgetMap:
            | view | action | slot         |
            | home | create | main_content |
        And the following WidgetLayout:
            | widgetMap | layoutXs | layoutSm | layoutMd | layoutLg |
            | home      | third    | quarters | 7525     | sixth    |
        When I reload the page
        Then I should find "3" columns with xs "4" sm "3" md "9" and lg "2" without a container
        And I should find "3" columns with xs "4" sm "3" md "3" and lg "2" without a container
        When I switch to "edit" mode
        And I edit the "Layout" widget
        And I should see "Widget #1 (Columns)"
        And I should see "1" quantum
        When I follow "xs" layout config
        And I select "third12" from "_a_static_widget_layout[layoutXs]"
        And I follow "sm" layout config
        And I select "halfquarterquarter" from "_a_static_widget_layout[layoutSm]"
        And I follow "md" layout config
        And I select "quarterquarterhalf" from "_a_static_widget_layout[layoutMd]"
        And I follow "lg" layout config
        And I select "2575" from "_a_static_widget_layout[layoutLg]"
        And I check the "_a_static_widget_layout[hasContainer]" checkbox
        And I submit the widget
        Then I should see the success message for Widget edit
        When I reload the page
        Then I should find "1" columns with xs "4" sm "6" md "3" and lg "3" with a container
        Then I should find "1" columns with xs "8" sm "3" md "3" and lg "9" with a container
        Then I should find "1" columns with xs "4" sm "3" md "6" and lg "3" with a container