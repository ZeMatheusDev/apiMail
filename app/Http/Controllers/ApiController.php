<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use libMail\HotmailMailer\HotmailMailer;

class ApiController extends Controller
{
    public function envioDoEmail(Request $request)
    {
            $mensagem = $request->mensagem;
            $titulo = 'teste';
            $hotmail = new HotmailMailer();
            $hotmail->envioDoEmail($titulo, $mensagem, 'teteulopes2009@hotmail.com', 'ovelhoeomar123@gmail.com', 'EwB4A8l6BAAUbDba3x2OMJElkF7gJ4z/VbCPEz0AARqYqqzKgw6yKpXYCZ4ISiUqNP1e7+3utgh38H2IYdwCE2Pc5P7QLEFVzRc0LcL0cXEdVuvIWO1IQEYWTZKhyd9fqLM1EP29j6uVl6esVJOWPIhb6TRVoWRsxN+zVZ3UkUy5TE0E0W1sMlw7xeGj/suX67R3jQS/CnahGtyepdZ2l6FzLGYBsYKr24Z4MkZaM/NHwUTyYBT5UkTCMr/4fxX5TouZrcQEWb9XyscaDTS9VfPe1Q90iBbGzTxwLlRI2QCHcO+BSImPB6PtPgTQ9Df+kX8LhjJlbHJiidbVgs5XmN4KR943DQdYpVUMgRAr14I4WC9vJHLTBrMjmlNfEpIQZgAAEJFvAYY+R/m2kak+hUmMKd5AAp8+ZQT53mtagietiI3VFk1WHVuRyduT7qSBHztA+JQFt2EMq8B5FUQnuMVfuaJxz+Ooi44SF6bLjPt9/UPDJAJEO0QnW6hg4n0pkfGBKa6oZ5g2zZ3uPDHwMnBc6VUpx8qCKZteP18rsrx7KaXds2jdjY9lZtcaxouttSBwMW1tIdT6Nzz8NrslVLozdOv2zDNIsJPXx0IS6CphC7nYtY0kTQhqBYgzu3Cptvr2dfa3uZHuvLfH6Ht4BPJ4oQC4Cws8Sf0HPrQGaEVpCTQ99ezriBF5+aLtO4ncW/SeDWChNopL/qtQVvOy8NhhNqxXoWUn9IQDw+lWiIHQ1VgzG3uw8ARq0EW9dA1vyeOsMwxZActyB9vioXGZ1AV03mz6YxC6f3mJkXGLzn06Hq4wm2BEXKOcZL8TdgsnwN0LynJzbyXXmEfw2edgG7+7X7fh7scMzIlqdoryRTR/8h7iNB+RDHgg1FqvQqXFT11zU6iTAHPoBW02/yEa7xJscOgK8gwr++bRHNfYQbK0blPp26WHSKd6EwE2rxwCdxl+d1uGAyZuh7tmmv12WxOCr6jhk8l5gSL/ZyamZSSFdzSvSc8mKDvcy+IDe20yo70z51PVClwgb1XBN8+esgMjtwNQ/Wdbcu5lpryWW+O2ABhwOmaSe/YyBzb1bvigX3fvsVrQwL1A9x/cELr9dr6+qZy4nrAafIW8N4XgjZb/ieXPTr/e8DZvqFN2KIt3LLOFmaH3baQOjcTlUraVpn2S6e2uZH4C');
            return view('index');
    }
}