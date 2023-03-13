<!-- <?php

// namespace App\Http\Controllers;

// use App\Models\User;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;

// class UserController extends Controller
// {
//     //Cadastrar
//     public function register(Request $request)
//     {
//         $model = new User();
//         $validations =
//             [
//                 'name' => 'required',
//                 'email' => 'email|email',
//                 'password' => 'required',
//                 'confirmPassword' => 'required'
//             ];
//         $feedback = [
//             'name.required' => 'O campo nome é obrigatório',
//             'email.email' => 'O campo (e-mail) é obrigatório',
//             'password.required' => 'O campo senha é obrigatório',
//             'confirmPassword.required' => 'O campo confirmar senha é obrigatório'
//         ];
//         $request->validate($validations, $feedback);

//         $model->name = $request->input('name');
//         $model->email = $request->input('email');
//         $password = $model->password = $request->input('password');
//         $confirmPassword = $request->input('confirmPassword');

//         if ($password == $confirmPassword) {
//             $model->save();
//             session()->flash('msg', 'Cadastrado com sucesso!!');
//         } else {
//             session()->flash('error', 'Senha e Confirmar senha não são iguais!!');
//         }
//         return view('site.register');
//     }
//     public function viewRegister()
//     {
//         return view('site.register');
//     }

//     // Login
//     public function login(Request $request)
//     {
//         $validations = [
//             'email' => 'email',
//             'password' => 'required'
//         ];
//         // Mensagens de feedback
//         $feedback = [
//             'email.email' => 'O campo (e-mail) é obrigatório',
//             'password.required' => 'O campo senha é obrigatório'
//         ];
//         $request->validate($validations, $feedback);

//         // Parametros 
//         $email = $request->get('email');
//         $password = $request->get('password');

//         // Iniciar o Model User
//         $user = new User();
//         $select = $user->where('email', $email)->where('password', $password)->get()->first();
//         if (isset($select->name)) {
//             session_start();
//             $_SESSION['nome'] = $select->name;
//             $_SESSION['email'] = $select->email;
//             return redirect()->route('site.home');
//         } else {
//             session()->flash('error', 'Usuário e/ou senha inválidos!!!');
//             return redirect()->route('site.login', ['erro' => 1]);
//         }
//     }
//     public function viewLogin()
//     {
//         return view('site.login');
//     }

//     // Redefinição de senha 
//     public function forgot()
//     {
//         return view('site.forgot');
//     }
//     public function viewForgot()
//     {
//         return view('site.forgot');
//     }
//     public function exit()
//     {
//         session_destroy();
//         unset($_SESSION['id'], $_SESSION['name']);
//         session()->flash('exit', 'Deslogado com sucesso!!');
//         return redirect()->route('site.login');
//     }
//     public function show($id)
//     {
//         $user = DB::find($id);
//         return view('site.components.nav', compact('user'));
//     }
// }