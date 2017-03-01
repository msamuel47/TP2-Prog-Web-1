function  ValiderLesChamps()
{
    window.alert("Sa marche ?");
if(Document.getElementsByName("nomEvent").length == 0 || Document.getElementsByName("date").length == 0 || Document.getElementsByName("city").Length == 0
   || Document.getElementsByName("country").length == 0 || Document.getElementsByName("game").length == 0)
{
  window.alert("Il vous manque un ou plusieurs champs à remplir ... veuillez bien remplir le formulaire avant de confirmer");
  return false;
}
else
{
    return true;
}
}

