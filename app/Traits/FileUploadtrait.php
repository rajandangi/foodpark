<?php
namespace App\Traits;

use Illuminate\Http\Request;

trait FileUploadTrait
{

    /**
     * Uploads an image file.
     *
     * @param \Illuminate\Http\Request $request The request object.
     * @param string $inputName The name of the input field containing the image file.
     * @param string $path The path where the image file should be stored (default: "/uploads").
     * @return string|null The path of the uploaded image file, or null if no file was uploaded.
     */
    public function uploadImage(Request $request, $inputName, $path = "/uploads")
    {
        if ($request->hasFile($inputName)):
            $image = $request->file($inputName);
            $extension = $image->getClientOriginalExtension();
            $imageName = 'media_' . uniqid() . '.' . $extension; // For example media_5d78bea3b9cd3.jpg

            // Move the image to the desired path
            $image->move(public_path($path), $imageName);

            // Return the path of the image
            return $path . '/' . $imageName;
        endif;

        return null;
    }
}