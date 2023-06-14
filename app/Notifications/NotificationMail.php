<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NotificationMail extends Notification
{
    use Queueable;
    protected $portfolio;

    public function __construct($portfolio)
    {
        $this->portfolio = $portfolio;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Renouvellement de Contrat')
            ->greeting('Bonjour Madame/Monsieur,')
            ->line('You have received a custom notification, This is A Notification Test !')
            ->line('Do not forget to add recipients list.')
            ->action('View Portfolio', route('portfolios.show', $this->portfolio->id))
            ->line('Thank you for using Comunik survey!');
    }

    public function toArray($notifiable)
    {
        return [
            'portfolio_id' => $this->portfolio->id,
            'message' => 'A new notification has been sent for the portfolio',
            'sent_at' => now()->format('Y-m-d H:i:s'),
            // Include any other additional data you want to pass
        ];
    }
}
