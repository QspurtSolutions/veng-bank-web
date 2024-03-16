<?php
namespace App\View\Components;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use App\Models\Service;
use App\Models\Technologies;
use App\Models\Industries;
use App\Models\Deposit;

class Header extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        

        $servicemenu = Service::latest()->get();

       

        echo'<pre>';print_r($servicemenu);  exit;

    
        

        return view('layouts.main', [

            'depositmenu' => Deposit::latest()->get(),
            
            'industriesmenu' => Industries::latest()->get(),
            'technologiesmenu' => Technologies::latest()->get()
        ]);


    }

}