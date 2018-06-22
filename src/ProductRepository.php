#!usr/bin/env php
<?php
declare(strict_types=1);

namespace App\Repository;


class ProductRepository
{

    private $products = [];

    public function getAll (): array
    {
        return [];
    }

    public function count (array $filter):int
    {
        return 0;
    }

    public function getProductCollection(){

        return new class implements \ArrayAccess
        {

        public function offsetExists($offset){

        }

            /**
             * Offset to retrieve
             * @link http://php.net/manual/en/arrayaccess.offsetget.php
             * @param mixed $offset <p>
             * The offset to retrieve.
             * </p>
             * @return mixed Can return all value types.
             * @since 5.0.0
             */
            public function offsetGet($offset){
                return $offset;
            }

            /**
             * Offset to set
             * @link http://php.net/manual/en/arrayaccess.offsetset.php
             * @param mixed $offset <p>
             * The offset to assign the value to.
             * </p>
             * @param mixed $value <p>
             * The value to set.
             * </p>
             * @return void
             * @since 5.0.0
             */
            public function offsetSet($offset, $value){

            }

            /**
             * Offset to unset
             * @link http://php.net/manual/en/arrayaccess.offsetunset.php
             * @param mixed $offset <p>
             * The offset to unset.
             * </p>
             * @return void
             * @since 5.0.0
             */
            public function offsetUnset($offset){
         }

        };
    }
}
