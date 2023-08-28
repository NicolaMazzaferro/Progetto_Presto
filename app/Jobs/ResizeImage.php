<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Spatie\Image\Image;
use Spatie\Image\Manipulations;

class ResizeImage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $w;
    private $h;
    private $fileName;
    private $path;
    /**
     * Create a new job instance.
     */
    public function __construct($filePath, $w, $h) //altezza e larghezza dell'immagine
    {
        $this->path = dirname($filePath);
        $this->fileName = basename($filePath);
        $this->w = $w;
        $this->h = $h;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        $w = $this->w;
        $h = $this->h;
        $srcPath = storage_path() . '/app/public/' . $this->path . '/' . $this->fileName;
        $destPath = storage_path() . '/app/public/' . $this->path . "/crop_{$w}x{$h}_" . $this->fileName;

        $croppedImage = Image::load($srcPath)
                        ->crop(Manipulations::CROP_CENTER, $w, $h)
                        ->watermark(public_path('/media/logo.png'))
                        ->watermarkPosition(Manipulations::POSITION_CENTER)
                        ->watermarkHeight(45, Manipulations::UNIT_PERCENT)    // 50 percent height
                        ->watermarkWidth(45, Manipulations::UNIT_PERCENT)   // 100 percent width    
                        ->save($destPath);
    }
}
