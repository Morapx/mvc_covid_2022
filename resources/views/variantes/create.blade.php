<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear variante</title>

</head>
<body>
    <h1>Crear variant</h1>
    <a href="{{route('variantes.index')}}">Go back</a>
    <form method="POST" action="{{route('variantes.store')}}">
    @csrf
        <label>Lineage</label>
        <input type="text" name="lineage">
        <br/>
        <label>Common countries</label>
        <textarea name="common_countries" rows="6"></textarea>
        <br/>
        <label>Earliest date</label>
        <input type="text" name="earliest_date">
        <br/>
        <label>Designated number</label>
        <input type="text" name="designated_number">
        <br/>
        <label>Assignated number</label>
        <input type="text" name="assigned_number">
        <br/>
        <label>Description</label>
        <textarea name="description" rows="6"></textarea>
        <br/>
        <label>Who name</label>
        <input type="text" name="who_name">
        <br/>
        <button type="submit">Save new variant</button>
        
    </form>
</body>
</html>