<?php

namespace App\Http\Controllers;

use Interpro\Entrance\Contracts\Extract\ExtractAgent;

class AdminController extends Controller
{
    private $extract;
    public function __construct(ExtractAgent $ext){
        $this->extract = $ext;
        $this->extract->tuneSelection('slides')->sortBy('sorter','DESC');
        $this->extract->tuneSelection('spec_sertificates')->sortBy('sorter','DESC');
        $this->extract->tuneSelection('serv_pokazania')->sortBy('sorter','DESC');
        $this->extract->tuneSelection('serv_protivopokazania')->sortBy('sorter','DESC');
        $this->extract->tuneSelection('serv_after_proc')->sortBy('sorter','DESC');
        $this->extract->tuneSelection('serv_effect_up')->sortBy('sorter','DESC');
        $this->extract->tuneSelection('tech_pokazania')->sortBy('sorter','DESC');
        $this->extract->tuneSelection('tech_protivopokazania')->sortBy('sorter','DESC');
        $this->extract->tuneSelection('tech_after_proc')->sortBy('sorter','DESC');
        $this->extract->tuneSelection('tech_effect_up')->sortBy('sorter','DESC');
        $this->extract->tuneSelection('hel_pokazania')->sortBy('sorter','DESC');
        $this->extract->tuneSelection('hel_protivopokazania')->sortBy('sorter','DESC');
        $this->extract->tuneSelection('hel_after_proc')->sortBy('sorter','DESC');
        $this->extract->tuneSelection('hel_effect_up')->sortBy('sorter','DESC');
        $this->extract->tuneSelection('problems')->sortBy('sorter','DESC');
        $this->extract->tuneSelection('stocks')->sortBy('sorter','DESC');
        $this->extract->tuneSelection('videos')->sortBy('sorter','DESC');
        $this->extract->tuneSelection('recommend')->sortBy('sorter','DESC');
    }

    public function getIndex(){
        return view('back.layout');
    }

    
    public function getAll(){
        $block = $this->extract->getBlock('all_site');
        return view('back.blocks.all_site', [
            'block' => $block
        ]);
    }


    public function getMeta(){
        $block = $this->extract->getBlock('slider');
        return view('back.blocks.meta', [
            'block' => $block
        ]);
    }

    
    public function getSlider(){
        $block = $this->extract->getBlock('slider');
        return view('back.blocks.slider', [
            'block' => $block
        ]);
    }
    
    
    public function getAbout(){
        $block = $this->extract->getBlock('about');
        return view('back.blocks.about', [
            'block' => $block
        ]);
    }
    
    
    public function getSpec(){
        $block = $this->extract->getBlock('specialists_about');
        return view('back.blocks.specialists_about', [
            'block' => $block
        ]);
    }
    
    
    public function getSpecItem( $id ){
        $item = $this->extract->getGroupItem('specialists', $id);
        return view('back.groups.specialists.specialists', [
            'item' => $item
        ]);
    }
    
    
    public function getServices(){
        $block = $this->extract->getBlock('services_block');
        return view('back.blocks.services_block', [
            'block' => $block
        ]);
    }
    
    
    public function getServicesCat( $id ){
        $item = $this->extract->getGroupItem('serv_category', $id);
        return view('back.groups.serv_category.serv_category', [
            'item' => $item
        ]);
    }
    
    
    public function getServicesItem( $catId, $id ){
        $item = $this->extract->getGroupItem('services', $id);
        return view('back.groups.services.services', [
            'item' => $item
        ]);
    }
    
    
    public function getTechnologies(){
        $block = $this->extract->getBlock('technologies_block');
        return view('back.blocks.technologies_block', [
            'block' => $block
        ]);
    }
    
    
    public function getTechnologiesItem( $id ){
        $item = $this->extract->getGroupItem('technologies', $id);
        return view('back.groups.technologies.technologies', [
            'item' => $item
        ]);
    }
    
    
    public function getHelpful(){
        $block = $this->extract->getBlock('helpful_block');
        return view('back.blocks.helpful_block', [
            'block' => $block
        ]);
    }
    
    
    public function getHelpfulItem( $id ){
        $item = $this->extract->getGroupItem('helpful', $id);
        return view('back.groups.helpful.helpful', [
            'item' => $item
        ]);
    }
    
    
    public function getProblems(){
        $block = $this->extract->getBlock('problems_block');
        return view('back.blocks.problems_block', [
            'block' => $block
        ]);
    }
    
    
    public function getQuestions(){
        $block = $this->extract->getBlock('questions_block');
        return view('back.blocks.questions_block', [
            'block' => $block
        ]);
    }
    
    
    public function getQuestionsItem( $id ){
        $item = $this->extract->getGroupItem('questions', $id);
        $problems = $this->extract->getBlock('problems_block');
        $specialists = $this->extract->getBlock('specialists_about');
        return view('back.groups.questions.questions', [
            'item' => $item,
            'problems' => $problems,
            'specialists' => $specialists
        ]);
    }
    
    
    public function getStocks(){
        $block = $this->extract->getBlock('stocks_block');
        return view('back.blocks.stocks_block', [
            'block' => $block
        ]);
    }
    
    
    public function getStocksItem( $id ){
        $item = $this->extract->getGroupItem('stocks', $id);
        return view('back.groups.stocks.stocks', [
            'item' => $item
        ]);
    }
    
    
    public function getVideos(){
        $block = $this->extract->getBlock('videos_block');
        return view('back.blocks.videos_block', [
            'block' => $block
        ]);
    }
    
    
    public function getContacts(){
        $block = $this->extract->getBlock('contacts');
        return view('back.blocks.contacts', [
            'block' => $block
        ]);
    }
    
    
    public function getTest(){
        $block = $this->extract->getBlock('testing_block');
        return view('back.blocks.testing_block', [
            'block' => $block
        ]);
    }
    
    
    public function getTestCategory( $id ){
        $item = $this->extract->getGroupItem('age', $id);
        return view('back.groups.age.age', [
            'item' => $item
        ]);
    }
    
    
    public function getTestItem( $catId, $id ){
        $item = $this->extract->getGroupItem('anket_item', $id);
        $services_block = $this->extract->getBlock('services_block');
        return view('back.groups.anket_item.anket_item', [
            'item' => $item,
            'services_block' => $services_block
        ]);
    }
    
    
    public function getPost(){
        $block = $this->extract->getBlock('feedback');
        return view('back.blocks.mails', [
            'block' => $block
        ]);
    }
}
