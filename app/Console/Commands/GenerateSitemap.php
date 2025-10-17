<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Generate the sitemap for Sonic Towing & Recovery';

    public function handle()
    {
        // إنشاء السيت ماب
        $sitemap = Sitemap::create()
            
            // الصفحة الرئيسية - الأهم
            ->add(Url::create('/')
                    ->setPriority(1.0)
                    ->setLastModificationDate(now())
                    ->setChangeFrequency('daily'))
            
            // قسم About
            ->add(Url::create('/#section_2')
                    ->setPriority(0.9)
                    ->setLastModificationDate(now())
                    ->setChangeFrequency('monthly'))
            
            // قسم Services
            ->add(Url::create('/#section_3')
                    ->setPriority(0.9)
                    ->setLastModificationDate(now())
                    ->setChangeFrequency('monthly'))
            
            // قسم الخريطة والموقع
            ->add(Url::create('/#section_4')
                    ->setPriority(0.8)
                    ->setLastModificationDate(now())
                    ->setChangeFrequency('monthly'))
            
            // قسم الأسئلة الشائعة
            ->add(Url::create('/#section_5')
                    ->setPriority(0.7)
                    ->setLastModificationDate(now())
                    ->setChangeFrequency('monthly'));

        // حفظ السيت ماب في المجلد العام
        $sitemap->writeToFile(public_path('sitemap.xml'));
        
        $this->info('✅ Sitemap generated successfully at: ' . url('sitemap.xml'));
    }
}