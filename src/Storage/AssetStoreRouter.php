<?php

namespace SilverStripe\Assets\Storage;

use SilverStripe\Control\HTTPResponse;
use SilverStripe\Control\HTTPResponseException;

/**
 * Represents a store usable with ProtectedFileController to serve up non-direct file requests
 */
interface AssetStoreRouter
{

    /**
     * Generate a custom HTTP response for a request to a given asset, identified by a path.
     *
     *
     * @param string $asset Asset path name, omitting any leading 'assets'
     * @return HTTPResponse
     * @throws HTTPResponseException
     */
    public function getResponseFor($asset);
}
