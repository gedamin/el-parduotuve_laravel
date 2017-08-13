<p>{{$user->name}},</p>

<p>Patvirtinkite registraciją paspausdami <a href="{{route('sendEmailDone',["email"=> $user->email, "verifyToken" =>$user->verifyToken])}}">čia</a>.<br/>
Jūsų registracijos elektroninis paštas: {{$user->email}}</p>
<br/>


<p>Pagarbiai,<br/>
<a href="HTTP://www.el-parduotuve.lt">www.el-parduotuve.lt</a> </p>
