<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>lesson10</title>
</head>
<body>
<h3>Полиморфизм</h3>
<p>
Полиморфизм - это описание шаблона в ООП, в котором классы имеют различную функциональность
	при использовании общего интерфейса. Прелесть заключается в том, что можно работать с различными классами
	и не думать что за класс используется, так как они имеют один интерфейс.<br><br>
Абстрактный класс - это базовый клас объекты которого не создаются(общая сущность). Можно создавать объекты
	наследников этого класса. Он содержит характеристики сущьностей, которые отличают его от других сущностей.
Абстрактый класс имеет абстрактый метод реализация которого отсутствует, могут содержать и реальные методы.
В классах наследниках абстрактные методы должны быть реализованныи и сигнатуры методов должны совпадать.<br>
Абстрактный класс можно применять когда работаем с общими понятиями сущностей.<br><br>
Интерфейс это инструмент, который указывает какие методы должен включать класс,
	без необходимости описания функционала.<br><br>
Если мы хотим описать только работу классов потомков, то использовать интерфейс.
Если надо реализовать общие методы тогда абстрактный.

</p>
<h3>Наследование</h3>
<p>
Наследование - это свойво в ООП, которое позволяет создавать дочерние классы (расширять)
	на основе родительских (супер-классов), забрав у них свойства, методы и конструкторы.
</p>
<a href="product/view.php">Доп. задание</a>
</body>
</html>
