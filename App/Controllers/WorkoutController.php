<?php

namespace App\Controllers;

use Framework\Core\BaseController;
use Framework\Http\Request;
use Framework\Http\Responses\Response;
use App\Models\Workout;

class WorkoutController extends BaseController
{
    public function index(Request $request): Response
    {
        return $this->html(['workouts' => Workout::getAll()]);
    }

    public function create(Request $request): Response
    {
        if ($request->isPost()) {
            $workout = new Workout();
            $workout->name = trim((string) $request->post('name'));
            $workout->trainingDate = (string) $request->post('trainingDate');

            $note = trim((string) $request->post('note'));
            $workout->note = $note === '' ? null : $note;

            $workout->save();

            return $this->redirect($this->url('workout.index'));
        }

        return $this->html();
    }

    public function edit(Request $request): Response
    {
        $id = filter_var($request->get('id'), FILTER_VALIDATE_INT, [
            'options' => ['min_range' => 1],
        ]);

        if ($id === false) {
            return $this->redirect($this->url('workout.index'));
        }

        $workout = Workout::getOne($id);

        if ($workout === null) {
            return $this->redirect($this->url('workout.index'));
        }

        if ($request->isPost()) {
            $workout->name = trim((string) $request->post('name'));
            $workout->trainingDate = (string) $request->post('trainingDate');

            $note = trim((string) $request->post('note'));
            $workout->note = $note === '' ? null : $note;

            $workout->save();

            return $this->redirect($this->url('workout.index'));
        }

        return $this->html(['workout' => $workout]);
    }

    public function delete(Request $request): Response
    {
        if ($request->isPost()) {
            $id = filter_var($request->get('id'), FILTER_VALIDATE_INT, [
                'options' => ['min_range' => 1],
            ]);

            if ($id !== false) {
                $workout = Workout::getOne($id);
                $workout?->delete();
            }
        }

        return $this->redirect($this->url('workout.index'));
    }
}