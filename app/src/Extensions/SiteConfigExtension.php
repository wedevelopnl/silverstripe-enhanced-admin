<?php

declare(strict_types=1);

namespace WeDevelop\EnhancedAdmin\Extensions;

use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
use SilverStripe\Forms\NumericField;
use SilverStripe\ORM\DataExtension;

final class SiteConfigExtension extends DataExtension
{
    /**
     * @config
     * @var array<string, string>
     */
    private static array $db = [
        'LoginPageContent' => 'HTMLText',
        'AdminLogoWidth' => 'Int(150)'
    ];

    /**
     * @config
     * @var array<string, string>
     */
    private static array $has_one = [
        'AdminLogo' => Image::class,
    ];

    /**
     * @config
     * @var array<string>
     */
    private static array $owns = [
        'AdminLogo',
    ];

    public function updateCMSFields(FieldList $fields): FieldList
    {
        $fields->addFieldsToTab('Root.Admin.LoginPage', [
            HTMLEditorField::create('LoginPageContent', 'Login page content'),
            UploadField::create('AdminLogo', 'Admin logo'),
            NumericField::create('AdminLogoWidth', 'Width of the admin logo')
        ]);


        return $fields;
    }
}
