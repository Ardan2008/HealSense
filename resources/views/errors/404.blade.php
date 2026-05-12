<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Not Found</title>
    <style>
        * {
            border: 0;
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        :root {
            --brand-color: #3ED6A8;
            --dark-text: #1F2937;
            --light-bg: #f8fafc;
            --dark-bg: #0a0a0a;
            font-size: clamp(1rem, 0.95rem + 0.25vw, 1.25rem);
        }

        body {
            background-color: light-dark(var(--light-bg), var(--dark-bg));
            display: flex;
            flex-direction: column;
            align-items: center; 
            justify-content: center;
            height: 100vh;
            font-family: 'Segoe UI', sans-serif;
            color-scheme: light dark;
            overflow: hidden;
        }

        main {
            display: flex;
            flex-direction: column;
            align-items: center; 
            text-align: center;
            width: 100%;
        }

        .face {
            display: block;
            width: 12em;
            height: auto;
            margin-bottom: 4em;
            transform: translateX(12px); 
            color: var(--brand-color);
            transition: filter 0.5s ease;
        }

        /* --- Animations Face --- */
        .face__eyes, .face__eye-lid, .face__mouth-left, .face__mouth-right, .face__nose, .face__pupil {
            animation: eyes 1s 0.3s cubic-bezier(0.65, 0, 0.35, 1) forwards;
        }
        .face__eye-lid, .face__pupil { animation-duration: 4s; animation-delay: 1.3s; animation-iteration-count: infinite; }
        .face__eye-lid { animation-name: eye-lid; }
        .face__mouth-left { animation-name: mouth-left; }
        .face__mouth-right { animation-name: mouth-right; }
        .face__nose { animation-name: nose; }
        .face__pupil { animation-name: pupil; }

        @keyframes eye-lid { from, 40%, 45%, to { transform: translateY(0); } 42.5% { transform: translateY(17.5px); } }
        @keyframes eyes { from { transform: translateY(112.5px); } to { transform: translateY(15px); } }
        @keyframes pupil {
            from, 37.5%, 40%, 45%, 87.5%, to { stroke-dashoffset: 0; transform: translate(0, 0); }
            12.5%, 25%, 62.5%, 75% { stroke-dashoffset: 0; transform: translate(-35px, 0); }
            42.5% { stroke-dashoffset: 35; transform: translate(0, 17.5px); }
        }
        @keyframes mouth-left { from, 50% { stroke-dashoffset: -102; } to { stroke-dashoffset: 0; } }
        @keyframes mouth-right { from, 50% { stroke-dashoffset: 102; } to { stroke-dashoffset: 0; } }
        @keyframes nose { from { transform: translate(0, 0); } to { transform: translate(0, 22.5px); } }

        /* --- Button Style --- */
        .btn-container {
            position: relative;
            display: inline-block;
            text-decoration: none;
            margin-left: 1.5em;
        }

        .custom-button {
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1.25rem 2.8rem;
            border-radius: 1.2rem;
            background-color: var(--brand-color);
            color: white;
            font-weight: 900;
            text-transform: uppercase;
            letter-spacing: 0.15em;
            font-size: 0.75rem;
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            border: 2px solid var(--brand-color);
            cursor: pointer;
            box-shadow: 0 20px 40px -15px rgba(62, 214, 168, 0.4);
            min-width: 260px;
        }

        .btn-fill {
            position: absolute;
            inset: 0;
            background-color: white;
            transform: translateY(100%);
            transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            z-index: 1;
        }

        .btn-container:hover .btn-fill { transform: translateY(0); }

        .btn-content {
            position: relative;
            z-index: 10;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1rem;
            transition: color 0.5s;
            width: 100%;
        }

        .btn-container:hover .btn-content { color: var(--dark-text); }

        .home-icon {
            width: 1.4rem;
            height: 1.4rem;
            fill: none;
            stroke: currentColor;
            stroke-width: 2.5;
            transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        /* --- Overlay Loading --- */
        #loadingOverlay {
            position: fixed;
            inset: 0;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            opacity: 0;
            visibility: hidden;
            transition: all 0.4s ease;
        }

        #loadingOverlay.active { opacity: 1; visibility: visible; }
        .loader-spinner {
            width: 50px;
            height: 50px;
            border: 4px solid rgba(62, 214, 168, 0.2);
            border-top: 4px solid var(--brand-color);
            border-radius: 50%;
            animation: spin 1s linear infinite;
            margin-bottom: 1.5rem;
        }
        .loading-text { color: light-dark(var(--dark-text), white); font-weight: 700; letter-spacing: 0.2em; text-transform: uppercase; animation: pulse 1.5s infinite; }
        @keyframes spin { to { transform: rotate(360deg); } }
        @keyframes pulse { 0%, 100% { opacity: 0.5; } 50% { opacity: 1; } }

    </style>
</head>
<body>

    <div id="loadingOverlay">
        <div class="loader-spinner"></div>
        <div class="loading-text">Loading....</div>
    </div>

    <main id="mainContent">
        <svg class="face" viewBox="0 0 320 380">
            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="25">
                <g class="face__eyes" transform="translate(0, 112.5)">
                    <g transform="translate(15, 0)">
                        <polyline class="face__eye-lid" points="37,0 0,120 75,120" />
                        <polyline class="face__pupil" points="55,120 55,155" stroke-dasharray="35 35" />
                    </g>
                    <g transform="translate(230, 0)">
                        <polyline class="face__eye-lid" points="37,0 0,120 75,120" />
                        <polyline class="face__pupil" points="55,120 55,155" stroke-dasharray="35 35" />
                    </g>
                </g>
                <rect class="face__nose" rx="4" ry="4" x="132.5" y="112.5" width="55" height="155" />
                <g stroke-dasharray="102 102" transform="translate(65, 334)">
                    <path class="face__mouth-left" d="M 0 30 C 0 30 40 0 95 0" stroke-dashoffset="-102" />
                    <path class="face__mouth-right" d="M 95 0 C 150 0 190 30 190 30" stroke-dashoffset="102" />
                </g>
            </g>
        </svg>

        <a href="javascript:void(0)" class="btn-container" onclick="startLoading()">
            <button class="custom-button">
                <span class="btn-fill"></span>
                <span class="btn-content">
                    Back To Home
                    <svg class="home-icon" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                    </svg>
                </span>
            </button>
        </a>
    </main>

    <script>
        function startLoading() {
            const overlay = document.getElementById('loadingOverlay');
            const main = document.getElementById('mainContent');
            overlay.classList.add('active');
            main.style.filter = "blur(10px)";
            setTimeout(() => {
                window.location.href = '/'; 
            }, 2500);
        }
    </script>
</body>
</html>