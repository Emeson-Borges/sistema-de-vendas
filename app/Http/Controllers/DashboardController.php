<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Categoria;
use DB;
use Illuminate\Database\Eloquent\Collection;
use Carbon\Carbon;


class DashboardController extends Controller
{
    //
    public function index() {
        $usuarios = User::all()->count();

        // Gráfico 1 - Usuários
        $usersData = User::select([
            DB::raw('EXTRACT(YEAR FROM created_at) as ano'),
            DB::raw('COUNT(*) as total')

        ])
        ->where('created_at', '>', Carbon::now()->subYear())
        ->groupBy('ano')
        ->orderBy('ano', 'asc')
        ->get();

        //preparar arrays
        foreach($usersData as $user) {
            $ano[] = $user->ano;
            $total[] = $user->total;

        }    
            //formatar para o chartJS
            $userLabel = "'Comparativo de cadastros de usuário'";
            $userAno = implode(',', $ano);
            $userTotal = implode(',', $total);

            // Gráfico 2 - Categorias
            $catData = Categoria::with('produtos')->get();

            // Preparar o array
            foreach($catData as $cat) {
                $catNome[] = "'".$cat->nome."'";
                $catTotal[] = $cat->produtos->count();
            }

            // Formatar para ChartJS
            $catLabel = implode(',', $catNome);
            $catTotal = implode(',', $catTotal);

        return view('admin.dashboard', compact('usuarios', 'userLabel', 'userAno', 'userTotal', 'catLabel', 'catTotal'));
    }
}
