<?php

namespace App\Services;

use App\Models\About;

class AboutService
{
    /**
     * Save or update the About record.
     *
     * @param array $data
     * @param int|null $id
     * @return About
     */
    public function save(array $data, $id = null)
    {
        $record = $id ? $this->findById($id) : new About;
        $record->fill($data);

        if (isset($data['image']) && $data['image'] instanceof \Illuminate\Http\UploadedFile) {
            $fileName = $this->storeImage($data['image']);
            $record->image = $fileName;
        }

        $record->save();
        return $record;
    }

    /**
     * Find an About record by ID.
     *
     * @param int $id
     * @return About
     */
    public function findById($id)
    {
        return About::findOrFail($id);
    }

    /**
     * Store image and return the file name.
     *
     * @param \Illuminate\Http\UploadedFile $image
     * @return string
     */
    protected function storeImage($image)
    {
        // Implement the logic to store the image and return the filename
        return $image->store('images', 'public');
    }

    /**
     * Get all About records.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAll()
    {
        return About::all();
    }

    /**
     * Delete an About record by ID.
     *
     * @param int $id
     */
    public function delete($id)
    {
        $record = $this->findById($id);
        $record->delete();
    }
}