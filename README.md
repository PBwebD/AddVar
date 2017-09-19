WordPress Plugin: Insert addvar
==================================
A WordPress plugin to add a value through a shortcode.

Shortcode
---------
**Basic Use**
[childmenu]
*This will utilize the defaults from the settings page.*

**Advanced Use**
[childmenu depth="-1" list_title="Navigation"]
*Override the defaults with attributes.*

Attributes
----------
Set default values, set widget values, and override default values with shortcode attributes.

| Attribute     | Notes
| ------------- | --------------------------
| depth         | -1 (list of all), 0 (nested list of all), or 1+ (# of levels)
| include       | comma-separated list of page IDs, ONLY includes pages listed
| exclude       | comma-separated list of page IDs
| sort          | menu_order, post_date, post_title, post_name, or post_parent
| list_title    | text to display above the page list
| show_parent   | choose yes to show the main parent page link above the list
| current_class | none, current-bold, current-italic or current-underline
| before_list   | allowed tags: li, a; allowed attrs: class, href, target, rel
| after_list    | allowed tags: li, a; allowed attrs: class, href, target, rel

Notes
-----
* List won't display on the main blog page or any of the post pages.

See https://www.slushman.com/the-structure-of-the-wordpress-plugin-boilerplate/