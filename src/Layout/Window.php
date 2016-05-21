<?php

namespace ProfIT\Bbb\Layout;

class Window
    extends Box
{
    public $name;

    public function __construct(StyleSheet $styles, array $props = [])
    {
        parent::__construct($styles, $props);

        $this->bgColor = $this->styles->rules['.videoViewStyleNoFocus']['backgroundColor'];
        $this->bdColor = $this->styles->rules['.videoViewStyleNoFocus']['borderColor'];
    }

    public function createTitleBar()
    {
        $titleBar = new TitleBar($this->styles);

        $this->addChild($titleBar);
    }

    public function getContentCoordinates()
    {
        return [
            $this->name,
            $this->absX + $this->offset[3],
            $this->absY + $this->offset[0],
            $this->absW - $this->offset[1] - $this->offset[3],
            $this->absH - $this->offset[0] - $this->offset[2],
        ];
    }
}