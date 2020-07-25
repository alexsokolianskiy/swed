<?php
namespace App\Services\Experiment;

class Example
{
    public $experiment;

    public function getExample($experiment, $name) {
        $path = public_path("code-examples/$experiment/$name.cpp");
        if (!file_exists($path)) {
            return null;
        }
        try {
            return file_get_contents($path);
        } catch (\Exception $e) {
            return null;
        }
        return null;
    }

    public function getExamples()
    {
        $examples = [
            'display' => [
                "circles", "lines", "text", "triangles", "rectangles", "color",
                "running", "hello"
            ],
            'distance' => [
                "measure", "measure_servo"
            ],
            'led' => [
                "defective", "brightness", "running", "sequential"
            ],
            'servo' => [
                "positions", "smooth"
            ]
        ];

        if (!in_array($this->experiment, array_keys($examples))) {
            return [];
        }
        $result = [];
        foreach ($examples[$this->experiment] as $example) {
            $result[$example] = $this->getExample($this->experiment, $example);
        }
        return $result;
    }
}
