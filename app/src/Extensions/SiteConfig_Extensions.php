use App\Models\SocialMedia;
    private static $has_many = [
        'SocialIcons' => SocialMedia::class,
    ];
        $fields->addFieldToTab('Root.Social', $this->getSocialGrid());


    public function getSocialGrid()
    {
        $grid = GridField::create('SocialIcons', 'Social Media', $this->owner->SocialIcons(),
            GridFieldConfig_RecordEditor::create());

//        $grid->getConfig()->addComponent(new GridFieldOrderableRows('SortOrder'));

        return $grid;
    }
}
