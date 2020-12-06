<?php

/*
|--------------------------------------------------------------------------
| Configuration that store what permission is required to access a route
|
| key   = the name of the route
| value = the permission required or the array of permissions
|         (permission are considered with logical OR)
|--------------------------------------------------------------------------
 */

return [

    /**
     * Search routes
     */
    
    'search-autocomplete' => KBox\Capability::MAKE_SEARCH,

    /**
     * Document routes
     */

    'documents' => [

        'index' => KBox\Capability::MAKE_SEARCH,
        'recent' => KBox\Capability::MAKE_SEARCH,
        'trash' => KBox\Capability::$CONTENT_MANAGER,
        'notindexed' => KBox\Capability::$CONTENT_MANAGER,
        'sharedwithme' => [KBox\Capability::RECEIVE_AND_SEE_SHARE, KBox\Capability::SHARE_WITH_USERS],
        'show' => KBox\Capability::$CONTENT_MANAGER,
        'by-klink-id' => KBox\Capability::$CONTENT_MANAGER,
        'public_visibility' => KBox\Capability::MAKE_SEARCH,
        'visibility' => KBox\Capability::MAKE_SEARCH,
        'create' => KBox\Capability::UPLOAD_DOCUMENTS,
        'store' => KBox\Capability::UPLOAD_DOCUMENTS,
        'edit' => KBox\Capability::EDIT_DOCUMENT,
        'update' => KBox\Capability::EDIT_DOCUMENT,
        'destroy' => KBox\Capability::DELETE_DOCUMENT,
        
        'publish' => KBox\Capability::PUBLISH_TO_KLINK,
        'unpublish' => KBox\Capability::PUBLISH_TO_KLINK,

        'version' => [

            'show' => KBox\Capability::EDIT_DOCUMENT,
            'delete' => KBox\Capability::EDIT_DOCUMENT,
            'restore' => KBox\Capability::EDIT_DOCUMENT,
        ],

        'bulk' => [
            
            'restore' => KBox\Capability::DELETE_DOCUMENT,
            'remove' => KBox\Capability::DELETE_DOCUMENT,
            'emptytrash' => KBox\Capability::CLEAN_TRASH,
            'copyto' => KBox\Capability::$CONTENT_MANAGER,
            'makepublic' => KBox\Capability::PUBLISH_TO_KLINK,
            'makeprivate' => KBox\Capability::PUBLISH_TO_KLINK,

        ],

        'starred' => [

            'index' => KBox\Capability::MAKE_SEARCH,
            'store' => KBox\Capability::MAKE_SEARCH,
            'show' => KBox\Capability::MAKE_SEARCH,
            'destroy' => KBox\Capability::MAKE_SEARCH,

        ],

        'groups' => [

            'create' => KBox\Capability::$CONTENT_MANAGER,
            'edit' => KBox\Capability::$CONTENT_MANAGER,
            'update' => KBox\Capability::$CONTENT_MANAGER,
            'store' => KBox\Capability::$CONTENT_MANAGER,
            'show' => KBox\Capability::$CONTENT_MANAGER,
            'destroy' => KBox\Capability::$CONTENT_MANAGER,

        ],

        'projects' => [

            'index' => KBox\Capability::MANAGE_PROJECT_COLLECTIONS,
            'show' => KBox\Capability::MANAGE_PROJECT_COLLECTIONS,

        ],
    
    ],

    'duplicates' => [
        'destroy' => KBox\Capability::EDIT_DOCUMENT,
    ],

    'shares' => [
        'index' => KBox\Capability::RECEIVE_AND_SEE_SHARE,
        'create' => KBox\Capability::SHARE_WITH_USERS,
        'store' => KBox\Capability::SHARE_WITH_USERS,
        'show' => KBox\Capability::RECEIVE_AND_SEE_SHARE,
        'group' => KBox\Capability::RECEIVE_AND_SEE_SHARE,
        'edit' => KBox\Capability::SHARE_WITH_USERS,
        'update' => KBox\Capability::SHARE_WITH_USERS,
        'destroy' => KBox\Capability::SHARE_WITH_USERS,
        'deletemultiple' => KBox\Capability::SHARE_WITH_USERS,
        'targets' => [
            'find' => KBox\Capability::SHARE_WITH_USERS,
        ],
    ],
    
    'links' => [
        'store' => KBox\Capability::SHARE_WITH_USERS,
        'show' => KBox\Capability::RECEIVE_AND_SEE_SHARE,
        'update' => KBox\Capability::SHARE_WITH_USERS,
        'destroy' => KBox\Capability::SHARE_WITH_USERS,
    ],

    'groups' => [
        'detail' => KBox\Capability::$CONTENT_MANAGER,
    ],

    /**
     * Administration routes
     */

    'administration' => [

        'index' => KBox\Capability::MANAGE_KBOX,

        'storage' => [
            'index' => KBox\Capability::MANAGE_KBOX,
            'reindexall' => KBox\Capability::MANAGE_KBOX,
            'reindexstatus' => KBox\Capability::MANAGE_KBOX,
            'naming' => KBox\Capability::MANAGE_KBOX,
            'files' => KBox\Capability::MANAGE_KBOX,
        ],

        'network' => [
            'index' => KBox\Capability::MANAGE_KBOX,
        ],

        'maintenance' => [
            'index' => KBox\Capability::MANAGE_KBOX,
        ],

        'mail' => [
            'index' => KBox\Capability::MANAGE_KBOX,
            'store' => KBox\Capability::MANAGE_KBOX,
            'test' => KBox\Capability::MANAGE_KBOX,
        ],
        
        'identity' => [
            'index' => KBox\Capability::MANAGE_KBOX,
            'store' => KBox\Capability::MANAGE_KBOX,
        ],
        
        'messages' => [
            'index' => KBox\Capability::MANAGE_KBOX,
            'create' => KBox\Capability::MANAGE_KBOX,
            'store' => KBox\Capability::MANAGE_KBOX,
            'show' => KBox\Capability::MANAGE_KBOX,
            'edit' => KBox\Capability::MANAGE_KBOX,
            'update' => KBox\Capability::MANAGE_KBOX,
            'destroy' => KBox\Capability::MANAGE_KBOX,
        ],
        
        'settings' => [
            'index' => KBox\Capability::MANAGE_KBOX,
            'create' => KBox\Capability::MANAGE_KBOX,
            'store' => KBox\Capability::MANAGE_KBOX,
            'show' => KBox\Capability::MANAGE_KBOX,
            'edit' => KBox\Capability::MANAGE_KBOX,
            'update' => KBox\Capability::MANAGE_KBOX,
            'destroy' => KBox\Capability::MANAGE_KBOX,
        ],

        'analytics' => [
            'index' => KBox\Capability::MANAGE_KBOX,
            'update' => KBox\Capability::MANAGE_KBOX,
        ],

        'support' => [
            'index' => KBox\Capability::MANAGE_KBOX,
            'update' => KBox\Capability::MANAGE_KBOX,
        ],

        'licenses' => [
            'index' => KBox\Capability::MANAGE_KBOX,
            'default' => ['update' => KBox\Capability::MANAGE_KBOX],
            'available' => ['update' => KBox\Capability::MANAGE_KBOX],
        ],

        'plugins' => [
            'index' => KBox\Capability::MANAGE_KBOX,
            'show' => KBox\Capability::MANAGE_KBOX,
            'edit' => KBox\Capability::MANAGE_KBOX,
            'update' => KBox\Capability::MANAGE_KBOX,
            'destroy' => KBox\Capability::MANAGE_KBOX,
        ],
    ],

    /**
     * GeoPlugin route permission
     */

    'plugins' => [
        'k-box-kbox-plugin-geo' => [
            'geodocuments' => KBox\Capability::MAKE_SEARCH,
        ],
    ],

 ];
