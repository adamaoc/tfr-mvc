<?php

class Extension extends Parsedown
{
    function __construct()
    {
      echo "THis is some stuff...";
      $this->InlineTypes['{'] = 'ColoredText';

      $this->inlineMarkerList .= '{';
        // print_r($this->InlineTypes);
    }

    protected function inlineColoredText($Excerpt)
    {
        echo "...more stuff...";
        if (preg_match('/^{c:([#\w]\w+)}(.*?){\/c}/', $Excerpt['text'], $matches))
        {
          echo "...more stuff...";
            return array(
                'extent' => strlen($matches[0]),
                'element' => array(
                    'name' => 'span',
                    'text' => $matches[2],
                    'attributes' => array(
                        'style' => 'color: '.$matches[1],
                    ),
                ),
            );
        }
    }
}
