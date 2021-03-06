<?php

class DatawrapperPlugin_VisualizationBarChart extends DatawrapperPlugin_Visualization {

    public function getMeta(){
        $id = $this->getName();
        $meta = array(
            "id" => "bar-chart",
            "title" =>  __("Bar Chart", $id),
            "version" => "1.3.2",
            "extends" => "raphael-chart",
            "order" => 5,
            "dimensions" => 1,
            "axes" => array(
                "labels" => array(
                    "accepts" => array("text", "date")
                ),
                "bars" => array(
                    "accepts" => array("number"),
                    "multiple" => true
                )
            ),
            "options" => array(
                "sort-values" => array(
                    "type" => "checkbox",
                    "label" => __("Autmatically sort bars", $id)
                ),
                "reverse-order" => array(
                    "type" => "checkbox",
                    "label" => __("Reverse order", $id),
                ),
                "negative-color" => array(
                    "type" => "checkbox",
                    "label" => __("Use different color for negative values", $id)
                ),
                "absolute-scale" => array(
                    "type" => "checkbox",
                    "label" => __("Use the same scale for all columns", $id)
                )
            ),
            "libraries" => array()
        );
        return $meta;
    }

}