# Twig

## link
    <a href=" {{ path('name_path')}} "

## for
    <ul>
        {% For item in array %}
            <li> {{ item }} </li>
                   {% else %}
                    <li> liste vide </li>
        {% endfor %}
    </ul>