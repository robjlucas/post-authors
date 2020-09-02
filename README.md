# Post Authors

WordPress assumes only 1 author per post, and that all authors are also users with logins.

Neither of these assumptions is helpful when trying to edit a blog that presents works by other authors, who may sometimes be multiple.

A solution is to create a custom taxonomy as this plugin does. Authors can then be added to a post just as one would add tags.

This also makes post authors visible in the REST API:

```sh
$curl -H "Accept: application/json" http://<your WordPress installation>/wp-json/wp/v2/post_authors
$curl -H "Accept: application/json" http://<your WordPress installation>/wp-json/wp/v2/post_authors/<author id>
```

## Installation
Just upload the zip file to your WordPress plugins directory and activate.
