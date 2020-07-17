<?php

namespace app\Services;

use App\SiteData;
use Illuminate\Support\Facades\DB;

class RepositorySiteData{
    

    public function save($request){
        DB::beginTransaction();
            $siteData = new SiteData();

            SiteData::where('id', '>=', 0 )->delete();

            $siteData->nome_site = $request->nome_site;
            $siteData->descricao_site = $request->descricao_site;
            $siteData->whatsapp_site = $request->whatsapp_site;
            $siteData->facebook_site = $request->facebook_site;
            $siteData->twitter_site = $request->twitter_site;

            if($request->has('mobile_banner')){
                $mobile_name = $request->file('mobile_banner')->store('banner');
                $siteData->mobile_banner = $mobile_name;
            }
            if($request->has('tablet_banner')){
                $table_name = $request->file('tablet_banner')->store('banner');
                $siteData->tablet_banner = $table_name;
            }
            if($request->has('desktop_banner')){
                $desktop_name = $request->file('desktop_banner')->store('banner');
                $siteData->desktop_banner = $desktop_name;
            }

            $siteData->title_form = $request->title_form;
            $siteData->subtitulo_form = $request->subtitulo_form;
            $siteData->subtitulo2_form = $request->subtitulo2_form;

            $siteData->title_content = $request->title_content;
            $siteData->text_content = $request->text_content;

            $siteData->save();
        DB::commit();
    }

}