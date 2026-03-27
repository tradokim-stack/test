<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Include stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet" />
</head>

<body>

    <!-- Create the editor container -->
    <div id="editor">
            <h1 class="ql-align-center">Quill Rich Text Editor</h1>
            <p><br></p>
            <p>Quill is a free, <a href="https://github.com/slab/quill/" rel="noopener noreferrer" target="_blank">open
                    source</a> WYSIWYG editor built for the modern web. With its <a
                    href="https://quilljs.com/docs/modules/" rel="noopener noreferrer" target="_blank">modular
                    architecture</a> and expressive <a href="https://quilljs.com/docs/api" rel="noopener noreferrer"
                    target="_blank">API</a>, it is completely customizable to fit any need.</p>
            <p><br></p><iframe class="ql-video ql-align-center" frameborder="0" allowfullscreen="true"
                src="https://player.vimeo.com/video/253905163" height="280" width="500"></iframe>
            <p><br></p>
            <h2 class="ql-align-center">Getting Started is Easy</h2>
            <p><br></p>
            <div class="ql-code-block-container" spellcheck="false"><select class="ql-ui" contenteditable="false">
                    <option value="plain">Plain</option>
                    <option value="bash">Bash</option>
                    <option value="cpp">C++</option>
                    <option value="cs">C#</option>
                    <option value="css">CSS</option>
                    <option value="diff">Diff</option>
                    <option value="xml">HTML/XML</option>
                    <option value="java">Java</option>
                    <option value="javascript">JavaScript</option>
                    <option value="markdown">Markdown</option>
                    <option value="php">PHP</option>
                    <option value="python">Python</option>
                    <option value="ruby">Ruby</option>
                    <option value="sql">SQL</option>
                </select>
                <div class="ql-code-block" data-language="javascript"><span class="ql-token hljs-comment">// &lt;link
                        href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet"&gt;</span>
                </div>
                <div class="ql-code-block" data-language="javascript"><span class="ql-token hljs-comment">// &lt;script
                        src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"&gt;&lt;/script&gt;</span></div>
                <div class="ql-code-block" data-language="javascript"><br></div>
                <div class="ql-code-block" data-language="javascript"><span class="ql-token hljs-keyword">const</span>
                    quill = <span class="ql-token hljs-keyword">new</span> <span
                        class="ql-token hljs-title">Quill</span>(<span class="ql-token hljs-string">'#editor'</span>, {
                </div>
                <div class="ql-code-block" data-language="javascript"> <span class="ql-token hljs-attr">modules</span>:
                    {</div>
                <div class="ql-code-block" data-language="javascript"> <span class="ql-token hljs-attr">toolbar</span>:
                    <span class="ql-token hljs-string">'#toolbar'</span></div>
                <div class="ql-code-block" data-language="javascript"> },</div>
                <div class="ql-code-block" data-language="javascript"> <span class="ql-token hljs-attr">theme</span>:
                    <span class="ql-token hljs-string">'snow'</span></div>
                <div class="ql-code-block" data-language="javascript">});</div>
                <div class="ql-code-block" data-language="javascript"><br></div>
                <div class="ql-code-block" data-language="javascript"><span class="ql-token hljs-comment">// Open your
                        browser's developer console to try out the API!</span></div>
            </div>
            <p><br></p>
            <p><br></p>
            <p class="ql-align-center"><strong>Built with</strong></p>
        </div>

    <!-- Include the Quill library -->
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>

    <script>
        const quill = new Quill('#editor', {
            modules: {
                toolbar: [
                    // text style
                    ['bold', 'italic', 'underline', 'strike'],
                    
                    // block
                    ['blockquote', 'code-block'],

                    // headers
                    [{ 'header': 1 }, { 'header': 2 }],
                    [{ 'header': [1, 2, 3, 4, 5, 6, false] }],

                    // lists
                    [{ 'list': 'ordered' }, { 'list': 'bullet' }],
                    [{ 'script': 'sub' }, { 'script': 'super' }],

                    // indent
                    [{ 'indent': '-1' }, { 'indent': '+1' }],

                    // direction
                    [{ 'direction': 'rtl' }],

                    // size & font
                    [{ 'size': ['small', false, 'large', 'huge'] }],
                    [{ 'font': [] }],

                    // color
                    [{ 'color': [] }, { 'background': [] }],

                    // align
                    [{ 'align': [] }],

                    // media
                    ['link', 'image', 'video'],

                    // clean
                    ['clean']
                ],
            },
            theme: 'snow'
        });

        quill.on('text-change', function(delta, oldDelta, source) {
            console.log('Content changed!');

            console.log('Delta:', delta);
            console.log('Old Delta:', oldDelta);
            console.log('Source:', source);
        });

        quill.on('editor-change', (eventName, ...args) => {
            console.group(`Quill Event: ${eventName}`);
            
            if (eventName === 'text-change') {
                const [delta, oldDelta, source] = args;
                console.log('delta:', delta);
                console.log('oldDelta:', oldDelta);
                console.log('source:', source);
            }

            if (eventName === 'selection-change') {
                const [range, oldRange, source] = args;
                console.log('range:', range);
                console.log('oldRange:', oldRange);
                console.log('source:', source);
            }

            console.groupEnd();
        });

    </script>
</body>

</html>
