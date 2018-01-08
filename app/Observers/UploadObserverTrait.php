<?php

namespace App\Observers;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

trait UploadObserverTrait
{
	protected function sendFile($model)
	{
		$field = $this->field;
		if (is_a($model->$field, UploadedFile::class) and $model->$field->isValid()) {
			$this->upload($model);
		}
	}

	protected function updateFile($model)
	{
		$field = $this->field;
		// se for uma instancia de uploadfile e for válido
		if (is_a($model->$field, UploadedFile::class) and $model->$field->isValid()) {
			// pega a imagem anterior
			$previous_image = $model->getOriginal($field);
			// faz o upload da imagem enviada
			$this->upload($model);			
			// deleta a imagem anterior
			Storage::delete($this->path . $previous_image);
		}
	}

	protected function removeFile($model)
	{
		$field = $this->field;
		Storage::delete($this->path . $model->$field);
	}

	protected function upload($model)
	{
		$field = $this->field;

		// pega a extensão e gera um nome random
		$extension = $model->$field->extension();
		$name = bin2hex(openssl_random_pseudo_bytes(8));
		$name = $name . '.' . $extension;

		$model->$field->storeAs($this->path, $name);
		$model->$field = $name;
	}
}