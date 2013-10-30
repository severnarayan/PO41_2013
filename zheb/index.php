<?

/** 
 * необходимо добавить в этот файл элемент массива
 * со своей датой рождения, фамилией и шифром. Необходимо чтобы Ваша строчка 
 * была добавлена именно вами, при этом вы не должны затирать изменения других пользователей
 */

$gitUsersPO41 = array(
	'01.01.1981' => 'Ivanov Ivan shifr 111',
	'02.02.1982' => 'Petrov Petr shifr 859345',
	'08.10.2013' => 'ZHEBOV ZHEB shifr 1477',
	'21.05.2013' => 'KoryaTo Mochi',
	'01.01.2010' => 'Moskvichev',
	'02.02.2011' => 'Moskvichev did it again',
	'03.03.2011' => 'Moskvichev is ZHEB',
	'21.12.2012' => 'Politov'
	'04.04.2014' => 'Khrabrov is KOLDYN',
	'11111' => 'xrustize',
	'92.02.2015' => 'Efremov'
	'12.10.1509' => 'Khrunov is Xrustize'
	// .... и так далее


);

print_r();



echo "KTO LOX EPTA ZHEB LOX";  // фича такая кароч

function sqrt_lol($a_karoch, $b_karoch, $c_karoch;) {  // квадратное уравнение высчитываем
	$discriminant = (4*$b_karoch)+($a_karoch + $c_karoch);
	
		if ($discriminant<0) {
		}	return echo "Lox disriminant menshe nulya";  // ну не помню я как там ваще че происходит, если дискриминант меньше нуля
		elseif ($discriminant>0) {  //  а вот если больше - помню
			$x1= sqrt($discriminant)\2*$a_karoch;
			$x2= -(sqrt($discriminant))\2*$a_karoch;
			return echo 'Karoche x1='.$x1.' a x2 karoche='.$x2.'. vot tak vot epta';
			
			/// не включен вариант дискриминанта равного нулю ///
		}
?>