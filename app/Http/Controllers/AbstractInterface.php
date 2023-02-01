<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

interface AbstractInterface
{
    public function index();
    public function insertView();
    public function insertOne(Request $request);
    public function getByIdFirst($id);
    public function updateView($id);
    public function updateOne($id, Request $request);
    public function deleteByIdFirst($id);
}
