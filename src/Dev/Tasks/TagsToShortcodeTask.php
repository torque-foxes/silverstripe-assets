<?php

namespace SilverStripe\Assets\Dev\Tasks;

use SilverStripe\Dev\BuildTask;

/**
 * Class TagsToShortcodeTask
 * @package SilverStripe\Assets\Dev\Tasks
 */
class TagsToShortcodeTask extends BuildTask
{
    private static $segment = 'TagsToShortcode';

    protected $title = 'Rewrite tags to shortcodes';

    protected $description = "
        Rewrites tags to shortcodes in any HTMLText field

		Parameters:
		- baseClass: The base class that will be used to look up HTMLText fields. Defaults to SilverStripe\ORM\DataObject
		- includeBaseClass: Whether to include the base class' HTMLText fields or not
    ";

    /**
     * @param \SilverStripe\Control\HTTPRequest $request
     * @throws \ReflectionException
     */
    public function run($request)
    {
        $tagsToShortcodeHelper = new TagsToShortcodeHelper(
            $request->getVar('baseClass'),
            isset($request->getVars()['includeBaseClass'])
        );
        $tagsToShortcodeHelper->run();

        echo 'DONE';
    }
}
