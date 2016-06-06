<!-- base.html -->
<!DOCTYPE html>
<html lang="ca">
<head>
	<meta charset="UTF-8">
	 {% block head %}
      <link rel="stylesheet" href="css/main.css" />
    {% endblock %}
</head>
<body>
	{% block content %} {% endblock %}
</body>
</html>
  