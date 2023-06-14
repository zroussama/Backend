<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;

use Carbon\Carbon;
use App\Http\Requests\CreateportfolioRequest;
use App\Http\Requests\UpdateportfolioRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\portfolio;
use App\Repositories\portfolioRepository;


use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class portfolioController extends AppBaseController
{
    /** @var portfolioRepository $portfolioRepository*/
    private $portfolioRepository;

    public function __construct(portfolioRepository $portfolioRepo)
    {
        $this->portfolioRepository = $portfolioRepo;
    }

    public function index(Request $request)
    {
        $portfolios = $this->portfolioRepository->paginate(10);
        return view('portfolios.index')
            ->with('portfolios', $portfolios);
    }

    public function create()
    {
        return view('portfolios.create');
    }

    public function store(CreateportfolioRequest $request)
    {
        $input = $request->all();
        $portfolio = $this->portfolioRepository->create($input);
        return redirect(route('portfolios.index'));
    }

    public function show($id)
    {
        $portfolio = $this->portfolioRepository->find($id);

        if (empty($portfolio)) {
            return redirect(route('portfolios.index'));
        }
        return view('portfolios.show')->with('portfolio', $portfolio);
    }
    public function edit($id)
    {
        $portfolio = $this->portfolioRepository->find($id);

        if (empty($portfolio)) {
            return redirect(route('portfolios.index'));
        }

        return view('portfolios.edit')->with('portfolio', $portfolio);
    }


    public function update($id, UpdateportfolioRequest $request)
    {
        $portfolio = $this->portfolioRepository->find($id);

        if (empty($portfolio)) {
            return redirect(route('portfolios.index'));
        }
        $portfolio = $this->portfolioRepository->update($request->all(), $id);
        return redirect(route('portfolios.index'));
    }

    /**
     * Remove the specified portfolio from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $portfolio = $this->portfolioRepository->find($id);

        if (empty($portfolio)) {
            return redirect(route('portfolios.index'));
        }
        $this->portfolioRepository->delete($id);
        return redirect(route('portfolios.index'));
    }

    public function notifier($id,$dateFichier,$notification) {
        $portfolio = portfolio::find($id);

        if ($portfolio && !$portfolio->notification && $dateFichier == Carbon::now()->subDays(2)->toDateString()) {
            // Logique de notification
            $users = $portfolio->users; // Remplacez "users" par la relation appropriée dans votre modèle
            $emailRecipients = $portfolio->getEmailRecipients(); // Méthode pour obtenir les destinataires des e-mails

            // Envoyer la notification aux utilisateurs
            foreach ($users as $user) {
                $user->sendNotification($portfolio); // Méthode pour envoyer la notification à l'utilisateur
            }

            // Envoyer la notification par e-mail
            foreach ($emailRecipients as $recipient) {
                Mail::to($recipient); // Remplacez "NotificationMail" par votre classe de notification par e-mail
            }

            // Effectuer une alerte (vous pouvez implémenter l'alerte de votre choix ici)
            Alert::notify('Notification', 'Une notification a été envoyée.', 'success');

            // Mettre à jour le drapeau de notification
            $portfolio->notification = true;
            $portfolio->save();
        }
    }
}
