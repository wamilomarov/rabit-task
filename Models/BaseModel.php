<?php


/**
 * Class BaseModel
 */
class BaseModel
{
    /**
     * @var array
     */
    public array $data;
    /**
     * @var array|string[]
     */
    protected array $fields = ['id'];

    // set values

    /**
     * @param $key
     * @param $value
     */
    public function __set($key, $value)
    {
        if (in_array($key, $this->fields)) {
            $this->data[$key] = $value;
        }
    }

    // get the column value as object attribute

    /**
     * @param $key
     * @return mixed|null
     */
    public function __get($key)
    {
        if (isset($this->data[$key])) {
            return $this->data[$key];
        }
        return null;
    }
}
