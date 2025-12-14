<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo API Documentation</title>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/swagger-ui/4.15.5/swagger-ui.css?v={{ time() }}" />
    <style>
        html {
            box-sizing: border-box;
            overflow: -moz-scrollbars-vertical;
            overflow-y: scroll;
        }
        *, *:before, *:after {
            box-sizing: inherit;
        }
        body {
            margin: 0;
            background: #fafafa;
        }
        .swagger-ui .topbar {
            background-color: #1f1f1f;
            border-bottom: 1px solid #2e2e2e;
        }
        #swagger-ui .swagger-ui .topbar .download-url-wrapper .select-label {
            color: #ffffff;
        }
    </style>
</head>
<body>
    <div id="swagger-ui"></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/swagger-ui/4.15.5/swagger-ui-bundle.js?v={{ time() }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/swagger-ui/4.15.5/swagger-ui-standalone-preset.js?v={{ time() }}"></script>
    <script>
        window.onload = function() {
            const ui = SwaggerUIBundle({
                url: '/swagger.yaml?v={{ time() }}',
                dom_id: '#swagger-ui',
                deepLinking: true,
                presets: [
                    SwaggerUIBundle.presets.apis
                ],
                plugins: [],
                layout: "BaseLayout",
                validatorUrl: null,
                docExpansion: "list",
                operationsSorter: "alpha",
                tagsSorter: "alpha",
                tryItOutEnabled: true,
                supportedSubmitMethods: ['get', 'post', 'put', 'delete']
            });

            window.ui = ui;
        }
    </script>
</body>
</html>