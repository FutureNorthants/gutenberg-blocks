# Future Northants Gutenberg Blocks

A collection of custom Gutenberg blocks for WordPress for use with the Future Northants WordPress Starter Theme.

Inspired by the [multiple-blocks-plugin example](https://github.com/rmorse/multiple-blocks-plugin)

## Blocks

- Section Link
- Section Links (which contains many Section Link blocks)

## Installation

Use composer to install the plugin when using the Future Northants WordPress Template.

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/FutureNorthants/gutenberg-blocks.git"
    }
  ],
  "require": {
    "future-northants/gutenberg-blocks": "dev-master"
  }
}
```

## Development

When working on a block, run the `npm run start:block-name` command, replacing the `block-name` with the name of the block, such as `section-link`.

### Adding a new block

1. To add a new block, `cd blocks` and then run `npx @wordpress/create-block block-name` replacing `block-name` with the name of your block.
1. Add the block to `gutenberg-blocks.php`

```php
register_block_type( plugin_dir_path( __FILE__ ) . 'blocks/block-name/' );
```

3. In the new block directory, remove the package.json and move the block.json to the root directory.
1. Edit the block.json, ensuring the name has the namespace of `future-northants-blocks`, for example `future-northants-blocks/block-name`, and the textdomain is `future-northants-blocks`.
1. In block.json, update the editorScript, editorStyle and style to include the build directory.
1. Update the src/index.js to point to the newly moved block.json `../block.json`.

## Deployment

Before committing changes, ensure you run `npm run build` to build the latest versions of the blocks.
