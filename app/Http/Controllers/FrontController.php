<?php

namespace App\Http\Controllers;

use App\rating;
use Interpro\Entrance\Contracts\Extract\ExtractAgent;


class FrontController extends Controller
{
    private $extract;

    public function __construct(ExtractAgent $ext){
        $this->extract = $ext;
        $all_site = $this->extract->getBlock('all_site');
        view()->share([
            'all_site' => $all_site,
        ]);
    }

    private function getRatingById( $id ){
        $rating = new rating();
        $rating = $rating->where('entity_id','=',$id)->get();

        //=Количество проголосовавших================
        $rating_front['count'] = $rating->count();
        //===========================================
        if($rating_front['count'] > 0){
            //=Средняя оценка============================
            $sum = 0;
            foreach($rating as $item){
              $sum += $item['value'];
            }

            $rating_front['middle'] = round( $sum / $rating_front['count'], 1 );

            //===========================================

            //=Процент для вывода рейтинга в верстке=====
            $rating_front['percent'] = ($sum * 100) / ($rating_front['count'] * 5);
            //===========================================
        }else{
            $rating_front['middle'] = 0;
            $rating_front['percent'] = 0;
        }

        return $rating_front;
    }


    public function getIndex(){
        $this->extract->tuneSelection('slides')->sortBy('sorter','ASC');
        $this->extract->tuneSelection('videos')->take(3)->sortBy('sorter','DESC');
        $this->extract->tuneSelection('serv_category')->like('show', true)->sortBy('sorter','ASC');
        $this->extract->tuneSelection('features_list')->like('show', true)->sortBy('sorter','ASC');
        $this->extract->tuneSelection('offers_list')->like('show', true)->sortBy('sorter','ASC');
        $this->extract->tuneSelection('stocks')->like('show', true)->sortBy('sorter','ASC');


        $slider = $this->extract->getBlock('slider');
        $services = $this->extract->getBlock('services_block');
        $videos = $this->extract->getBlock('videos_block');
        $features = $this->extract->getBlock('features');
        $offers = $this->extract->getBlock('offers');
        $title_block = $this->extract->getBlock('title_block');
        $stocks = $this->extract->getBlock('stocks_block');

        return view('front.index.index', [
            'slider' => $slider,
            'services' => $services,
            'videos' => $videos,
            'features' => $features,
            'offers' => $offers,
            'title_block' => $title_block,
            'stocks' => $stocks,
        ]);
    }


    public function getAbout(){
        $about = $this->extract->getBlock('about');
        return view('front.about.about', [
            'about' => $about,
        ]);
    }


    public function getSpecialists(){
        $this->extract->tuneSelection('specialists')->like('show', true)->sortBy('sorter','ASC');

        $specialists = $this->extract->getBlock('specialists_about');
        return view('front.specialists.specialists', [
            'specialists' => $specialists,
        ]);
    }


    public function getSpecialist( $slug ){
        $this->extract->tuneSelection('specialists')->like('show', true)->sortBy('sorter','ASC');
        $this->extract->tuneSelection('services')->like('show', true)->sortBy('sorter','ASC');
        $this->extract->tuneSelection('spec_sertificates')->sortBy('sorter','ASC');

        $specialist = $this->extract->getBySlug('specialists', $slug);
        if (empty($specialist)) {
            return view('errors.404');
        }
        $specialists = $this->extract->getBlock('specialists_about');
        $services = $this->extract->getBlock('services_block');
        return view('front.specialists.specialist', [
            'specialists' => $specialists,
            'specialist' => $specialist,
            'services' => $services,
        ]);
    }


    public function getServices(){
        $this->extract->tuneSelection('serv_category')->like('show', true)->sortBy('sorter','ASC');
        $this->extract->tuneSelection('services')->like('show', true)->sortBy('sorter','ASC');

        $services = $this->extract->getBlock('services_block');
        return view('front.services.services', [
            'services' => $services,
        ]);
    }


    public function getService( $slug ){
        $this->extract->tuneSelection('serv_category')->like('show', true)->sortBy('sorter','ASC');
        $this->extract->tuneSelection('services')->like('show', true)->sortBy('sorter','ASC');
        $this->extract->tuneSelection('stocks')->like('show', true)->sortBy('sorter','ASC');

        $service = $this->extract->getBySlug('services', $slug);
        if (empty($service)) {
            return view('errors.404');
        }
        $services = $this->extract->getBlock('services_block');
        $stocks = $this->extract->getBlock('stocks_block');
        $rating = $this->getRatingById($service->id);
        return view('front.services.service', [
            'services' => $services,
            'service' => $service,
            'stocks' => $stocks,
            'rating' => $rating,
        ]);
    }


    public function getTechnologies(){
        $this->extract->tuneSelection('technologies')->like('show', true)->sortBy('sorter','ASC');

        $technologies = $this->extract->getBlock('technologies_block');
        return view('front.technologies.technologies', [
            'technologies' => $technologies,
        ]);
    }


    public function getTechnology( $slug ){
        $this->extract->tuneSelection('technologies')->like('show', true)->sortBy('sorter','ASC');
        $this->extract->tuneSelection('stocks')->like('show', true)->sortBy('sorter','ASC');

        $technology = $this->extract->getBySlug('technologies', $slug);
        if (empty($technology)) {
            return view('errors.404');
        }
        $technologies = $this->extract->getBlock('technologies_block');
        $stocks = $this->extract->getBlock('stocks_block');
        $rating = $this->getRatingById($technology->id);
        return view('front.technologies.technology', [
            'technologies' => $technologies,
            'technology' => $technology,
            'stocks' => $stocks,
            'rating' => $rating,
        ]);
    }


    public function getHelpfulCommon(){
        $this->extract->tuneSelection('helpful')->like('show', true)->sortBy('sorter','ASC');

        $helpful = $this->extract->getBlock('helpful_block');
        return view('front.helpful.helpful_common', [
            'helpful' => $helpful,
        ]);
    }


    public function getHelpful( $slug ){
        $this->extract->tuneSelection('stocks')->like('show', true)->sortBy('sorter','ASC');

        $helpful = $this->extract->getBySlug('helpful', $slug);
        if (empty($helpful)) {
            return view('errors.404');
        }
        $stocks = $this->extract->getBlock('stocks_block');
        $rating = $this->getRatingById($helpful->id);
        return view('front.helpful.helpful', [
            'helpful' => $helpful,
            'stocks' => $stocks,
            'rating' => $rating,
        ]);
    }


    public function getQuestions( $slug = '' ){
        $problem = '';
        if ($slug != '') {
            $problem = $this->extract->getBySlug('problems', $slug);
            if (empty($problem)) {
                return view('errors.404');
            }
            $this->extract->tuneSelection('questions')->like('show', true)->like('problem_id', $problem->id)->sortBy('sorter','ASC');
        } else {
            $this->extract->tuneSelection('questions')->like('show', true)->sortBy('sorter','ASC');
        }

        $this->extract->tuneSelection('specialists')->like('show', true)->sortBy('sorter','ASC');

        $questions = $this->extract->getBlock('questions_block');
        $problems = $this->extract->getBlock('problems_block');
        $specialists = $this->extract->getBlock('specialists_about');
        return view('front.questions.questions', [
            'questions' => $questions,
            'problems' => $problems,
            'problem' => $problem,
            'specialists' => $specialists,
            'slug' => $slug,
        ]);
    }


    public function getStocks(){
        $this->extract->tuneSelection('stocks')->like('show', true)->sortBy('sorter','ASC');

        $stocks = $this->extract->getBlock('stocks_block');
        return view('front.stocks.stocks', [
            'stocks' => $stocks,
        ]);
    }


    public function getVideos(){
        $this->extract->tuneSelection('videos')->sortBy('sorter','DESC');

        $videos = $this->extract->getBlock('videos_block');
        return view('front.videos.videos', [
            'videos' => $videos,
        ]);
    }


    public function getContacts(){
        $contacts = $this->extract->getBlock('contacts');
        $services = $this->extract->getBlock('services_block');
        return view('front.contacts.contacts', [
            'contacts' => $contacts,
            'services' => $services,
        ]);
    }
}