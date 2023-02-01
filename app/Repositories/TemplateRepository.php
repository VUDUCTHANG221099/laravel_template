<?php
namespace App\Repositories;

use App\Contracts\Repositories\TemplateRepositoryInterface;

// use App\Models\User;
class TemplateRepository implements TemplateRepositoryInterface
{
    /**
     * @param array $data
     * @return mixed
     */
    public function insert(array $data)
    {
        // return User::create($data);
    }
    /**
     * @return mixed
     */
    public function getByIdASCAll()
    {
        // $usersASC=User::orderByDESC('id')->get();
        // return $usersASC;
    }
    /**
     * @return mixed
     */
    public function getByIdDESCAll()
    {
        // $usersDESC=User::orderByDESC('id')->get();
        // return $usersDESC;
    }
    /**
     *
     * @param mixed $id
     * @return mixed
     */
    public function getById($id)
    {
        // return User::where('id',$id)->first();
    }
    /**
     *
     * @param mixed $id
     * @param array $data
     * @return mixed
     */
    public function update($id, array $data)
    {
        // return User::whereId($id)->update($data);
    }
    /**
     *
     * @param mixed $id
     * @return mixed
     */
    public function deleteById($id)
    {
        // return User::whereId($id)->delete();
    }
}
