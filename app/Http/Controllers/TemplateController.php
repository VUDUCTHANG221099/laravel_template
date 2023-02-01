<?php
namespace App\Http\Controllers;

use App\Contracts\Repositories\TemplateRepositoryInterface;
use Illuminate\Http\Request;

class TemplateController extends Controller implements AbstractInterface
{
    /**
     */
    protected $templateRepository;
    public function __construct(TemplateRepositoryInterface $templateRepository)
    {
        $this->templateRepository = $templateRepository;
    }
    /**
     * @return mixed
     */
    public function index()
    {
    }
    /**
     * @return mixed
     */
    public function insertView()
    {
    }
    /**
     *
     * @param Request $request
     * @return mixed
     */
    public function insertOne(Request $request)
    {
    }
    /**
     *
     * @param mixed $id
     * @return mixed
     */
    public function getByIdFirst($id)
    {
    }
    /**
     *
     * @param mixed $id
     * @return mixed
     */
    public function updateView($id)
    {
    }
    /**
     *
     * @param mixed $id
     * @param Request $request
     * @return mixed
     */
    public function updateOne($id, Request $request)
    {
    }
    /**
     *
     * @param mixed $id
     * @return mixed
     */
    public function deleteByIdFirst($id)
    {
    }
}
