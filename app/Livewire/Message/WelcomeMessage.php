<?php

namespace App\Livewire\Message;

use App\Models\WelcomeMessage as ModelsWelcomeMessage;
use Livewire\Component;

class WelcomeMessage extends Component
{
    public $welcomeMessages;

    public function mount(ModelsWelcomeMessage $welcomeMessage)
    {
         $this->welcomeMessages = $welcomeMessage->active()->get();
    }

    public function render()
    {
        return view('livewire.message.welcome-message');
    }
}
