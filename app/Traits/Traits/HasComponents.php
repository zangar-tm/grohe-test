<?php
namespace App\Traits;

trait HasComponents {
    public function getComponent($name)
    {
        return $this->getComponentData($this->{$name});
    }

    public function getComponentData($data)
    {
        $result = collect([]);
        $data = json_decode($data, true);
        foreach ($data as $item) {
            $elem = collect($item)->mapWithKeys(function ($item) {
                return [$item['name'] => $item['value']];
            })->toArray();

            $result->push($elem);
        }
        return $result;
    }

    public function getComponentValue($name,$index,$key)
    {
        $component = $this->getComponent($name)->toArray();

        if(count($component)) {
            return $component[$index][$key];
        }
        return null;
    }
}
