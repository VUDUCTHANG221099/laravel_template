<?php
namespace App\Contracts\Repositories;
interface AbstractRepositoryInterface
{
    public function insert(array $data);
    public function getByIdASCAll();
    public function getByIdDESCAll();
    public function getById($id);
    public function update($id, array $data);
    public function deleteById($id);
}
