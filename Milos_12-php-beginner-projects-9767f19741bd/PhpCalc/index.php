<!DOCTYPE html>
<html lang="en">

<head>

    <title>Document</title>
</head>

<body>
    <form>
        <input type="text" name="calc">
        <input type="text" name="calc1">
        <select name="ca">
            <option>plus</option>
            <option>minus</option>
            <option>puta</option>
            <option>podeljeno</option>
        </select>
        <button type="submit" name="submit" value="submit">Submit</button>
    </form>
    <p>Odgovor je :</p>
    <?php

if (isset($_GET['submit'])) {
    $result=$_GET['calc'];
    $result1=$_GET['calc1'];
    $result2=$_GET['ca'];
    switch ($result2) {
        case 'plus':
            echo $result + $result1;
            break;
            case 'minus':
            echo $result - $result1;
            break;
            case 'puta':
            echo $result * $result1;
            break;
            case 'podeljeno':
            echo $result / $result1;
            break;
       
    }
}
    ?>
</body>

</html>