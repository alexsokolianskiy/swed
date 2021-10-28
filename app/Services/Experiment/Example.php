<?php
namespace App\Services\Experiment;

class Example
{
    /**
     * Get example for experiment
     *
     * @param string $experiment
     * @param string $name
     * @return string|null
     */
    public function getExample(string $experiment, string $name) {
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

    /**
     * Get examples
     *
     * @param string $experiment
     * @return array
     */
    public function getExamples(string $experiment)
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

        if (!in_array($experiment, array_keys($examples))) {
            return [];
        }
        $result = [];
        foreach ($examples[$experiment] as $example) {
            $result[$example] = $this->getExample($experiment, $example);
        }
        return $result;
    }
}
