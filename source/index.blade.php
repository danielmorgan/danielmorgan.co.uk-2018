@extends('_layouts.master')

@section('body')
    <div class="Content">
        <h3 class="text-xl font-semibold text-blue-darkest">About me...</h3>
        <p class="mt-4 text-blue-darkest leading-normal">
            I'm a software developer from the UK with over 9 years experience mostly in web technologies. In the past I've worked as a web designer, front-end dev, and back-end dev.
        </p>
        <p class="mt-4 text-blue-darkest leading-normal">
            I’ve made brochure sites, complex web apps, e-commerce stores, interactive maps for museums, networked systems for live events, and lately I’ve been working on <a href="https://piing.events">a product</a> that lets hundreds of people play games together from their phone.
        </p>
        <p class="mt-4 text-blue-darkest leading-normal">
            Currently working at <a href="https://rhythm.digital">Rhythm</a> in Manchester as an <abbr title="Officially my title is Vice Admiral of Interactive Development">interactive developer</abbr>.
        </p>
    </div>
    <div class="mt-8">
        <h3 class="text-xl font-semibold text-blue-darkest">My skills...</h3>
        <ul class="mt-4 SkillsList">
            <li>
                <svg viewBox="0 0 128 128">
                    <path fill="#6181B6" d="M64 33.039c-33.74 0-61.094 13.862-61.094 30.961s27.354 30.961 61.094 30.961 61.094-13.862 61.094-30.961-27.354-30.961-61.094-30.961zm-15.897 36.993c-1.458 1.364-3.077 1.927-4.86 2.507-1.783.581-4.052.461-6.811.461h-6.253l-1.733 10h-7.301l6.515-34h14.04c4.224 0 7.305 1.215 9.242 3.432 1.937 2.217 2.519 5.364 1.747 9.337-.319 1.637-.856 3.159-1.614 4.515-.759 1.357-1.75 2.624-2.972 3.748zm21.311 2.968l2.881-14.42c.328-1.688.208-2.942-.361-3.555-.57-.614-1.782-1.025-3.635-1.025h-5.79l-3.731 19h-7.244l6.515-33h7.244l-1.732 9h6.453c4.061 0 6.861.815 8.402 2.231s2.003 3.356 1.387 6.528l-3.031 15.241h-7.358zm40.259-11.178c-.318 1.637-.856 3.133-1.613 4.488-.758 1.357-1.748 2.598-2.971 3.722-1.458 1.364-3.078 1.927-4.86 2.507-1.782.581-4.053.461-6.812.461h-6.253l-1.732 10h-7.301l6.514-34h14.041c4.224 0 7.305 1.215 9.241 3.432 1.935 2.217 2.518 5.418 1.746 9.39zM95.919 54h-5.001l-2.727 14h4.442c2.942 0 5.136-.29 6.576-1.4 1.442-1.108 2.413-2.828 2.918-5.421.484-2.491.264-4.434-.66-5.458-.925-1.024-2.774-1.721-5.548-1.721zM38.934 54h-5.002l-2.727 14h4.441c2.943 0 5.136-.29 6.577-1.4 1.441-1.108 2.413-2.828 2.917-5.421.484-2.491.264-4.434-.66-5.458s-2.772-1.721-5.546-1.721z"></path>
                </svg>
                <span>Modern, carefully written PHP and JavaScript</span>
            </li>
            <li>
                <svg viewBox="0 0 128 128">
                    <path fill-rule="evenodd" clip-rule="evenodd" fill="#FD4F31" d="M16.934 1.719c-1.127.088-2.234.074-3.325.373-2.387.655-4.508 1.702-6.379 3.316-1.1.948-2.06 1.97-2.875 3.174-1.258 1.859-2.115 3.857-2.545 6.106.172.301.353.617.545.938 1.219 2.038 2.439 4.062 3.661 6.098l3.212 5.341c.988 1.646 1.974 3.293 2.96 4.939l4.608 7.688c1.047 1.748 2.095 3.497 3.143 5.244 1.527 2.545 3.058 5.088 4.583 7.634l5.609 9.371c1.617 2.699 3.237 5.396 4.857 8.093l.216.314c.235.075.422.011.616-.035 2.134-.512 4.268-1.021 6.402-1.531 3.461-.827 6.922-1.651 10.383-2.479l5.421-1.297c3.499-.836 6.999-1.67 10.498-2.508 3.537-.846 7.073-1.696 10.611-2.543 1.788-.429 3.576-.856 5.365-1.283 3.461-.826 6.922-1.65 10.383-2.474l11.308-2.693.611-.165-.167-.331-3.086-4.362-3.048-4.315-3.26-4.604-3.116-4.413-3.088-4.361-3.188-4.507c-1.041-1.47-2.084-2.938-3.126-4.407l-1.647-2.326c-.252-.357-.453-.742-.587-1.159-.326-1.011.046-1.684.636-2.181.382-.323.822-.56 1.298-.7.663-.195 1.332-.382 2.01-.51 1.359-.257 2.727-.475 4.091-.702l4.624-.754c.975-.161 1.949-.33 2.924-.495 1.325-.224 2.65-.449 3.976-.67 1.287-.216 2.574-.43 3.861-.642l4.213-.689 2.924-.491c1.112-.186 2.223-.371 3.334-.553 1.386-.226 2.771-.454 4.157-.671.826-.129 1.652-.174 2.472.062.615.177 1.175.465 1.696.833l.721.503c.072-.166-.032-.256-.08-.351-1.04-2.105-2.458-3.915-4.26-5.422-1.675-1.402-3.556-2.433-5.636-3.09-1.229-.389-2.492-.208-3.778-.305M55.689 127c-.062 0-.117-.45-.187-.569-1.5-2.56-3.016-5.308-4.498-7.877-1.867-3.238-3.717-6.486-5.557-9.74-1.965-3.478-3.913-6.966-5.863-10.452-1.854-3.314-3.702-6.631-5.549-9.948-1.115-2.005-2.223-4.014-3.337-6.02l-.296-.459-.542.107c-1.072.277-2.142.556-3.212.838-1.49.392-2.979.791-4.47 1.18-3.347.871-6.694 1.737-10.041 2.605-3.404.884-6.951 1.77-10.356 2.65-.207.053.219.071-.781.106v21.145c.412.656.373.347.399.563.079.626.207 1.257.317 1.877.412 2.31 1.339 4.425 2.679 6.351 1.965 2.826 4.582 4.846 7.788 6.082 1.145.44 2.34.75 3.562.9l1.241.328"></path><path fill-rule="evenodd" clip-rule="evenodd" fill="#FD4F31" d="M4.976 77.742c3.939-.937 7.879-1.873 11.818-2.808 1.73-.41 3.461-.815 5.191-1.227.865-.206 1.732-.402 2.59-.634.764-.206.858-.459.465-1.148-.568-.996-1.146-1.986-1.721-2.979l-5.064-8.72-5.062-8.721c-1.717-2.958-3.436-5.916-5.154-8.873-1.471-2.53-2.942-5.06-4.412-7.59-.636-1.094-1.408-2.191-2.047-3.284-.119-.199.42-.437-.58-.543v47.396c0-.032.453-.059.606-.096l3.37-.773zM126.224 111.62c-1.544.549-3.089 1.102-4.632 1.655-3.515 1.26-7.03 2.52-10.545 3.781-1.953.701-3.902 1.41-5.856 2.108-3.982 1.421-7.966 2.837-11.949 4.255-2.308.822-4.617 1.838-6.924 2.664-.632.227-1.255.917-1.881.917h26.49l.57-.327c.674-.029 1.337-.229 1.999-.35 2.719-.497 5.154-1.673 7.311-3.392 1.657-1.321 3.005-2.936 4.061-4.778 1.086-1.896 1.731-3.947 2.041-6.101.027-.186.085-.397-.071-.589-.22-.017-.414.086-.614.157zM123.949 76.049c-1.168-1.598-2.339-3.193-3.505-4.792-1.609-2.207-3.215-4.416-4.822-6.624-.653-.896-1.315-1.785-1.952-2.691-.192-.273-.411-.346-.71-.265l-.171.049c-2.958.719-5.917 1.436-8.876 2.153l-5.302 1.287c-3.457.839-6.915 1.679-10.372 2.519-3.419.831-6.838 1.663-10.258 2.492l-10.662 2.582c-3.497.849-6.992 1.701-10.488 2.551l-10.142 2.462c-1.787.434-3.574.866-5.359 1.302-.263.064-.546.08-.826.292l.239.455c1.497 2.586 2.994 5.171 4.495 7.755 1.699 2.926 3.399 5.851 5.103 8.774 1.874 3.213 3.753 6.424 5.63 9.636 1.079 1.845 2.151 3.692 3.239 5.532 1.209 2.044 2.422 4.084 3.653 6.115.369.607.788 1.187 1.21 1.759.283.382.633.708 1.046.957.426.257.885.338 1.369.229.25-.057.495-.139.737-.223l.89-.33c3.237-1.107 6.473-2.214 9.711-3.317 2.526-.86 5.055-1.716 7.583-2.571 2.509-.851 5.02-1.698 7.53-2.545l7.474-2.524c2.548-.861 5.095-1.722 7.642-2.585 3.126-1.061 6.251-2.126 9.379-3.185 3.015-1.02 6.033-2.034 9.049-3.052.185-.062.389-.088.542-.291l.019-.439c.001-6.255-.001-12.511.006-18.766 0-.334-.089-.604-.289-.873-.948-1.269-1.877-2.551-2.812-3.828zM123.43 17.111c-.702-.889-1.596-1.171-2.692-.885-.477.125-.967.204-1.453.293-1.594.292-3.19.579-4.784.868-2.334.424-4.667.852-7.001 1.272-1.848.332-3.697.659-5.546.983l-7.418 1.298c-.311.054-.625.108-.925.204-.437.14-.563.414-.363.825.163.336.366.657.586.959 1.534 2.114 3.075 4.223 4.616 6.333 2.124 2.909 4.249 5.817 6.374 8.724 1.798 2.46 3.598 4.92 5.397 7.379 1.414 1.932 2.828 3.864 4.244 5.795l.279.338 12.271-3.033.029-.636c.001-8.511-.001-17.022.006-25.534 0-.376-.091-.678-.328-.976-1.032-1.303-2.045-2.621-3.066-3.933l-.226-.274zM126.731 58.352c-1.856.446-3.719.87-5.62 1.373.201.357 5.415 7.395 5.718 7.729l.19.105.021-.429.001-2.963c.001-1.719.005-3.438.001-5.157 0-.209.059-.434-.085-.646l-.226-.012z"></path>
                </svg>
                <span>Laravel, Symfony, Express</span>
            </li>
            <li>
                <svg viewBox="0 0 128 128">
                    <path fill="#00618A" d="M116.948 97.807c-6.863-.187-12.104.452-16.585 2.341-1.273.537-3.305.552-3.513 2.147.7.733.809 1.829 1.365 2.731 1.07 1.73 2.876 4.052 4.488 5.268 1.762 1.33 3.577 2.751 5.465 3.902 3.358 2.047 7.107 3.217 10.34 5.268 1.906 1.21 3.799 2.733 5.658 4.097.92.675 1.537 1.724 2.732 2.147v-.194c-.628-.8-.79-1.898-1.366-2.733l-2.537-2.537c-2.48-3.292-5.629-6.184-8.976-8.585-2.669-1.916-8.642-4.504-9.755-7.609l-.195-.195c1.892-.214 4.107-.898 5.854-1.367 2.934-.786 5.556-.583 8.585-1.365l4.097-1.171v-.78c-1.531-1.571-2.623-3.651-4.292-5.073-4.37-3.72-9.138-7.437-14.048-10.537-2.724-1.718-6.089-2.835-8.976-4.292-.971-.491-2.677-.746-3.318-1.562-1.517-1.932-2.342-4.382-3.511-6.633-2.449-4.717-4.854-9.868-7.024-14.831-1.48-3.384-2.447-6.72-4.293-9.756-8.86-14.567-18.396-23.358-33.169-32-3.144-1.838-6.929-2.563-10.929-3.513-2.145-.129-4.292-.26-6.438-.391-1.311-.546-2.673-2.149-3.902-2.927-4.894-3.092-17.448-9.817-21.072-.975-2.289 5.581 3.421 11.025 5.462 13.854 1.434 1.982 3.269 4.207 4.293 6.438.674 1.467.79 2.938 1.367 4.489 1.417 3.822 2.652 7.98 4.487 11.511.927 1.788 1.949 3.67 3.122 5.268.718.981 1.951 1.413 2.145 2.927-1.204 1.686-1.273 4.304-1.95 6.44-3.05 9.615-1.899 21.567 2.537 28.683 1.36 2.186 4.567 6.871 8.975 5.073 3.856-1.57 2.995-6.438 4.098-10.732.249-.973.096-1.689.585-2.341v.195l3.513 7.024c2.6 4.187 7.212 8.562 11.122 11.514 2.027 1.531 3.623 4.177 6.244 5.073v-.196h-.195c-.508-.791-1.303-1.119-1.951-1.755-1.527-1.497-3.225-3.358-4.487-5.073-3.556-4.827-6.698-10.11-9.561-15.609-1.368-2.627-2.557-5.523-3.709-8.196-.444-1.03-.438-2.589-1.364-3.122-1.263 1.958-3.122 3.542-4.098 5.854-1.561 3.696-1.762 8.204-2.341 12.878-.342.122-.19.038-.391.194-2.718-.655-3.672-3.452-4.683-5.853-2.554-6.07-3.029-15.842-.781-22.829.582-1.809 3.21-7.501 2.146-9.172-.508-1.666-2.184-2.63-3.121-3.903-1.161-1.574-2.319-3.646-3.124-5.464-2.09-4.731-3.066-10.044-5.267-14.828-1.053-2.287-2.832-4.602-4.293-6.634-1.617-2.253-3.429-3.912-4.683-6.635-.446-.968-1.051-2.518-.391-3.513.21-.671.508-.951 1.171-1.17 1.132-.873 4.284.29 5.462.779 3.129 1.3 5.741 2.538 8.392 4.294 1.271.844 2.559 2.475 4.097 2.927h1.756c2.747.631 5.824.195 8.391.975 4.536 1.378 8.601 3.523 12.292 5.854 11.246 7.102 20.442 17.21 26.732 29.269 1.012 1.942 1.45 3.794 2.341 5.854 1.798 4.153 4.063 8.426 5.852 12.488 1.786 4.052 3.526 8.141 6.05 11.513 1.327 1.772 6.451 2.723 8.781 3.708 1.632.689 4.307 1.409 5.854 2.34 2.953 1.782 5.815 3.903 8.586 5.855 1.383.975 5.64 3.116 5.852 4.879zM29.729 23.466c-1.431-.027-2.443.156-3.513.389v.195h.195c.683 1.402 1.888 2.306 2.731 3.513.65 1.367 1.301 2.732 1.952 4.097l.194-.193c1.209-.853 1.762-2.214 1.755-4.294-.484-.509-.555-1.147-.975-1.755-.556-.811-1.635-1.272-2.339-1.952z"></path>
                </svg>
                <span>Relational database design, normal forms, MySQL/MariaDB</span>
            </li>
            <li>
                <svg viewBox="0 0 32 32">
                    <path fill="#61dafb" style="fill: var(--color6, #61dafb)" d="M18.852 16c0 1.575-1.277 2.852-2.852 2.852s-2.852-1.277-2.852-2.852c0-1.575 1.277-2.852 2.852-2.852s2.852 1.277 2.852 2.852z"></path>
                    <path fill="#61dafb" style="fill: var(--color6, #61dafb)" d="M8.011 21.673l-0.629-0.16c-4.691-1.185-7.381-3.197-7.381-5.519s2.691-4.333 7.381-5.519l0.629-0.159 0.177 0.624c0.545 1.86 1.163 3.443 1.899 4.957l-0.082-0.186 0.135 0.284-0.135 0.284c-0.656 1.329-1.275 2.912-1.761 4.551l-0.056 0.22-0.177 0.623zM7.089 11.933c-3.565 1.001-5.753 2.533-5.753 4.061 0 1.527 2.188 3.059 5.753 4.061 0.512-1.62 1.046-2.965 1.662-4.263l-0.086 0.202c-0.531-1.098-1.066-2.443-1.511-3.828l-0.065-0.234zM23.989 21.673l-0.177-0.625c-0.544-1.859-1.162-3.441-1.9-4.954l0.081 0.184-0.135-0.284 0.135-0.284c0.656-1.329 1.275-2.911 1.762-4.55l0.056-0.221 0.177-0.624 0.631 0.159c4.689 1.185 7.38 3.197 7.38 5.52s-2.691 4.333-7.38 5.519l-0.631 0.16zM23.335 15.995c0.64 1.385 1.169 2.747 1.576 4.061 3.567-1.003 5.753-2.535 5.753-4.061 0-1.528-2.188-3.059-5.753-4.061-0.511 1.619-1.045 2.963-1.662 4.262l0.086-0.2z"></path>
                    <path fill="#61dafb" style="fill: var(--color6, #61dafb)" d="M7.080 11.927l-0.177-0.623c-1.319-4.648-0.919-7.979 1.097-9.141 1.977-1.141 5.152 0.207 8.479 3.621l0.453 0.465-0.453 0.465c-1.146 1.19-2.207 2.482-3.162 3.853l-0.068 0.103-0.18 0.257-0.313 0.027c-1.875 0.151-3.596 0.439-5.264 0.86l0.218-0.047-0.629 0.159zM9.608 3.087c-0.357 0-0.673 0.077-0.94 0.231-1.325 0.764-1.56 3.42-0.647 7.004 1.21-0.285 2.681-0.521 4.18-0.658l0.131-0.010c0.894-1.264 1.792-2.37 2.756-3.414l-0.020 0.022c-2.080-2.025-4.049-3.175-5.46-3.175zM22.393 30.236c-0.001 0-0.001 0 0 0-1.9 0-4.34-1.431-6.872-4.031l-0.453-0.465 0.453-0.465c1.146-1.19 2.206-2.482 3.16-3.854l0.068-0.103 0.18-0.257 0.312-0.027c1.875-0.15 3.597-0.438 5.267-0.858l-0.218 0.046 0.629-0.159 0.179 0.624c1.316 4.645 0.917 7.977-1.099 9.139-0.449 0.259-0.988 0.411-1.562 0.411-0.016 0-0.031-0-0.047-0l0.002 0zM16.932 25.728c2.080 2.025 4.049 3.175 5.46 3.175h0.001c0.356 0 0.673-0.077 0.939-0.231 1.325-0.764 1.561-3.421 0.647-7.005-1.212 0.286-2.682 0.522-4.182 0.658l-0.13 0.010c-0.893 1.265-1.791 2.371-2.755 3.416l0.020-0.022z"></path>
                    <path fill="#61dafb" style="fill: var(--color6, #61dafb)" d="M24.92 11.927l-0.629-0.159c-1.453-0.376-3.175-0.664-4.939-0.806l-0.111-0.007-0.312-0.027-0.18-0.257c-1.021-1.474-2.082-2.766-3.237-3.966l0.009 0.010-0.453-0.465 0.453-0.465c3.325-3.413 6.499-4.761 8.479-3.621 2.016 1.163 2.416 4.493 1.099 9.14l-0.179 0.624zM19.667 9.653c1.523 0.139 2.969 0.364 4.312 0.668 0.915-3.584 0.679-6.24-0.647-7.004-1.317-0.761-3.793 0.405-6.4 2.944 0.943 1.022 1.841 2.128 2.666 3.289l0.069 0.103zM9.608 30.236c-0.014 0-0.030 0-0.046 0-0.574 0-1.113-0.152-1.577-0.419l0.015 0.008c-2.016-1.161-2.416-4.492-1.097-9.139l0.176-0.624 0.629 0.159c1.54 0.388 3.239 0.661 5.047 0.812l0.313 0.027 0.179 0.257c1.022 1.475 2.083 2.767 3.239 3.967l-0.010-0.010 0.453 0.465-0.453 0.465c-2.531 2.6-4.971 4.031-6.868 4.031zM8.021 21.667c-0.915 3.584-0.679 6.241 0.647 7.005 1.316 0.751 3.791-0.407 6.4-2.944-0.943-1.022-1.841-2.129-2.667-3.29l-0.069-0.103c-1.629-0.146-3.099-0.382-4.534-0.711l0.224 0.043z"></path>
                    <path fill="#61dafb" style="fill: var(--color6, #61dafb)" d="M16 22.504c-1.097 0-2.225-0.048-3.355-0.141l-0.313-0.027-0.18-0.257c-0.544-0.768-1.139-1.691-1.697-2.639l-0.103-0.19c-0.452-0.758-0.971-1.732-1.45-2.728l-0.105-0.243-0.133-0.284 0.133-0.284c0.584-1.239 1.102-2.212 1.658-3.161l-0.103 0.191c0.552-0.955 1.159-1.907 1.8-2.829l0.18-0.257 0.313-0.027c1.005-0.090 2.174-0.142 3.355-0.142s2.35 0.052 3.505 0.153l-0.15-0.011 0.312 0.027 0.179 0.257c1.177 1.666 2.294 3.567 3.252 5.56l0.104 0.24 0.135 0.284-0.135 0.284c-1.058 2.232-2.176 4.133-3.439 5.925l0.083-0.125-0.179 0.257-0.312 0.027c-1.129 0.093-2.259 0.141-3.356 0.141zM13.071 21.059c1.973 0.148 3.885 0.148 5.86 0 1.004-1.445 1.978-3.104 2.827-4.836l0.101-0.228c-0.947-1.958-1.922-3.617-3.012-5.19l0.083 0.126c-0.877-0.071-1.898-0.111-2.929-0.111s-2.052 0.040-3.063 0.119l0.134-0.008c-1.008 1.447-1.983 3.106-2.83 4.84l-0.099 0.224c0.951 1.96 1.926 3.619 3.014 5.193l-0.085-0.13z"></path>
                </svg>
                <span>React, Redux, Vue, Webpack</span>
            </li>
            <li>
                <svg viewBox="0 0 128 128">
                    <path fill="#F34F29" d="M124.737 58.378l-55.116-55.114c-3.172-3.174-8.32-3.174-11.497 0l-11.444 11.446 14.518 14.518c3.375-1.139 7.243-.375 9.932 2.314 2.703 2.706 3.461 6.607 2.294 9.993l13.992 13.993c3.385-1.167 7.292-.413 9.994 2.295 3.78 3.777 3.78 9.9 0 13.679-3.78 3.78-9.901 3.78-13.683 0-2.842-2.844-3.545-7.019-2.105-10.521l-13.048-13.048-.002 34.341c.922.455 1.791 1.063 2.559 1.828 3.778 3.777 3.778 9.898 0 13.683-3.779 3.777-9.904 3.777-13.679 0-3.778-3.784-3.778-9.905 0-13.683.934-.933 2.014-1.638 3.167-2.11v-34.659c-1.153-.472-2.231-1.172-3.167-2.111-2.862-2.86-3.551-7.06-2.083-10.576l-14.313-14.313-37.792 37.79c-3.175 3.177-3.175 8.325 0 11.5l55.117 55.114c3.174 3.174 8.32 3.174 11.499 0l54.858-54.858c3.174-3.176 3.174-8.327-.001-11.501z"></path>
                </svg>
                <span>CLI, Git, GNU tools. Can exit Vim without panicking.</span>
            </li>
            <li>
                <svg viewBox="0 0 128 128">
                    <path fill-rule="evenodd" clip-rule="evenodd" fill="#3A4D54" d="M73.8 50.8h11.3v11.5h5.7c2.6 0 5.3-.5 7.8-1.3 1.2-.4 2.6-1 3.8-1.7-1.6-2.1-2.4-4.7-2.6-7.3-.3-3.5.4-8.1 2.8-10.8l1.2-1.4 1.4 1.1c3.6 2.9 6.5 6.8 7.1 11.4 4.3-1.3 9.3-1 13.1 1.2l1.5.9-.8 1.6c-3.2 6.2-9.9 8.2-16.4 7.8-9.8 24.3-31 35.8-56.8 35.8-13.3 0-25.5-5-32.5-16.8l-.1-.2-1-2.1c-2.4-5.2-3.1-10.9-2.6-16.6l.2-1.7h9.6v-11.4h11.3v-11.2h22.5v-11.3h13.5v22.5z"></path><path fill="#00AADA" d="M110.4 55.1c.8-5.9-3.6-10.5-6.4-12.7-3.1 3.6-3.6 13.2 1.3 17.2-2.8 2.4-8.5 4.7-14.5 4.7h-72.2c-.6 6.2.5 11.9 3 16.8l.8 1.5c.5.9 1.1 1.7 1.7 2.6 3 .2 5.7.3 8.2.2 4.9-.1 8.9-.7 12-1.7.5-.2.9.1 1.1.5.2.5-.1.9-.5 1.1-.4.1-.8.3-1.3.4-2.4.7-5 1.1-8.3 1.3h-.6000000000000001c-1.3.1-2.7.1-4.2.1-1.6 0-3.1 0-4.9-.1 6 6.8 15.4 10.8 27.2 10.8 25 0 46.2-11.1 55.5-35.9 6.7.7 13.1-1 16-6.7-4.5-2.7-10.5-1.8-13.9-.1z"></path><path fill="#28B8EB" d="M110.4 55.1c.8-5.9-3.6-10.5-6.4-12.7-3.1 3.6-3.6 13.2 1.3 17.2-2.8 2.4-8.5 4.7-14.5 4.7h-68c-.3 9.5 3.2 16.7 9.5 21 4.9-.1 8.9-.7 12-1.7.5-.2.9.1 1.1.5.2.5-.1.9-.5 1.1-.4.1-.8.3-1.3.4-2.4.7-5.2 1.2-8.5 1.4l-.1-.1c8.5 4.4 20.8 4.3 35-1.1 15.8-6.1 30.6-17.7 40.9-30.9-.2.1-.4.1-.5.2z"></path><path fill="#028BB8" d="M18.7 71.8c.4 3.3 1.4 6.4 2.9 9.3l.8 1.5c.5.9 1.1 1.7 1.7 2.6 3 .2 5.7.3 8.2.2 4.9-.1 8.9-.7 12-1.7.5-.2.9.1 1.1.5.2.5-.1.9-.5 1.1-.4.1-.8.3-1.3.4-2.4.7-5.2 1.2-8.5 1.4h-.4c-1.3.1-2.7.1-4.1.1-1.6 0-3.2 0-4.9-.1 6 6.8 15.5 10.8 27.3 10.8 21.4 0 40-8.1 50.8-26h-85.1v-.1z"></path><path fill="#019BC6" d="M23.5 71.8c1.3 5.8 4.3 10.4 8.8 13.5 4.9-.1 8.9-.7 12-1.7.5-.2.9.1 1.1.5.2.5-.1.9-.5 1.1-.4.1-.8.3-1.3.4-2.4.7-5.2 1.2-8.6 1.4 8.5 4.4 20.8 4.3 34.9-1.1 8.5-3.3 16.8-8.2 24.2-14.1h-70.6z"></path><path fill-rule="evenodd" clip-rule="evenodd" fill="#00ACD3" d="M28.4 52.7h9.8v9.8h-9.8v-9.8zm.8.8h.8v8.1h-.8v-8.1zm1.4 0h.8v8.1h-.8v-8.1zm1.5 0h.8v8.1h-.8v-8.1zm1.5 0h.8v8.1h-.8v-8.1zm1.5 0h.8v8.1h-.8v-8.1zm1.5 0h.8v8.1h-.8v-8.1zM39.6 41.5h9.8v9.8h-9.8v-9.8zm.9.8h.8v8.1h-.8v-8.1zm1.4 0h.8v8.1h-.8v-8.1zm1.5 0h.8v8.1h-.8v-8.1zm1.5 0h.8v8.1h-.8v-8.1zm1.4 0h.8v8.1h-.8v-8.1zm1.5 0h.8v8.1h-.8v-8.1z"></path><path fill-rule="evenodd" clip-rule="evenodd" fill="#23C2EE" d="M39.6 52.7h9.8v9.8h-9.8v-9.8zm.9.8h.8v8.1h-.8v-8.1zm1.4 0h.8v8.1h-.8v-8.1zm1.5 0h.8v8.1h-.8v-8.1zm1.5 0h.8v8.1h-.8v-8.1zm1.4 0h.8v8.1h-.8v-8.1zm1.5 0h.8v8.1h-.8v-8.1z"></path><path fill-rule="evenodd" clip-rule="evenodd" fill="#00ACD3" d="M50.9 52.7h9.8v9.8h-9.8v-9.8zm.8.8h.8v8.1h-.8v-8.1zm1.5 0h.8v8.1h-.8v-8.1zm1.5 0h.8v8.1h-.8v-8.1zm1.4 0h.8v8.1h-.8v-8.1zm1.5 0h.8v8.1h-.8v-8.1zm1.5 0h.8v8.1h-.8v-8.1z"></path><path fill-rule="evenodd" clip-rule="evenodd" fill="#23C2EE" d="M50.9 41.5h9.8v9.8h-9.8v-9.8zm.8.8h.8v8.1h-.8v-8.1zm1.5 0h.8v8.1h-.8v-8.1zm1.5 0h.8v8.1h-.8v-8.1zm1.4 0h.8v8.1h-.8v-8.1zm1.5 0h.8v8.1h-.8v-8.1zm1.5 0h.8v8.1h-.8v-8.1zM62.2 52.7h9.8v9.8h-9.8v-9.8zm.8.8h.8v8.1h-.8v-8.1zm1.5 0h.8v8.1h-.8v-8.1zm1.4 0h.8v8.1h-.8v-8.1zm1.5 0h.8v8.1h-.8v-8.1zm1.5 0h.8v8.1h-.8v-8.1zm1.5 0h.8v8.1h-.8v-8.1z"></path><path fill-rule="evenodd" clip-rule="evenodd" fill="#00ACD3" d="M62.2 41.5h9.8v9.8h-9.8v-9.8zm.8.8h.8v8.1h-.8v-8.1zm1.5 0h.8v8.1h-.8v-8.1zm1.4 0h.8v8.1h-.8v-8.1zm1.5 0h.8v8.1h-.8v-8.1zm1.5 0h.8v8.1h-.8v-8.1zm1.5 0h.8v8.1h-.8v-8.1z"></path><path fill-rule="evenodd" clip-rule="evenodd" fill="#23C2EE" d="M62.2 30.2h9.8v9.8h-9.8v-9.8zm.8.8h.8v8.1h-.8v-8.1zm1.5 0h.8v8.1h-.8v-8.1zm1.4 0h.8v8.1h-.8v-8.1zm1.5 0h.8v8.1h-.8v-8.1zm1.5 0h.8v8.1h-.8v-8.1zm1.5 0h.8v8.1h-.8v-8.1z"></path><path fill-rule="evenodd" clip-rule="evenodd" fill="#00ACD3" d="M73.5 52.7h9.8v9.8h-9.8v-9.8zm.8.8h.8v8.1h-.8v-8.1zm1.4 0h.8v8.1h-.8v-8.1zm1.5 0h.8v8.1h-.8v-8.1zm1.5 0h.8v8.1h-.8v-8.1zm1.5 0h.8v8.1h-.8v-8.1zm1.5 0h.8v8.1h-.8v-8.1z"></path><path fill-rule="evenodd" clip-rule="evenodd" fill="#D4EEF1" d="M48.8 78.3c1.5 0 2.7 1.2 2.7 2.7 0 1.5-1.2 2.7-2.7 2.7-1.5 0-2.7-1.2-2.7-2.7 0-1.5 1.2-2.7 2.7-2.7"></path><path fill-rule="evenodd" clip-rule="evenodd" fill="#3A4D54" d="M48.8 79.1c.2 0 .5 0 .7.1-.2.1-.4.4-.4.7 0 .4.4.8.8.8.3 0 .6-.2.7-.4.1.2.1.5.1.7 0 1.1-.9 1.9-1.9 1.9-1.1 0-1.9-.9-1.9-1.9 0-1 .8-1.9 1.9-1.9M1.1 72.8h125.4c-2.7-.7-8.6-1.6-7.7-5.2-5 5.7-16.9 4-20 1.2-3.4 4.9-23 3-24.3-.8-4.2 5-17.3 5-21.5 0-1.4 3.8-21 5.7-24.3.8-3 2.8-15 4.5-20-1.2 1.1 3.5-4.9 4.5-7.6 5.2"></path><path fill="#BFDBE0" d="M56 97.8c-6.7-3.2-10.3-7.5-12.4-12.2-2.5.7-5.5 1.2-8.9 1.4-1.3.1-2.7.1-4.1.1-1.7 0-3.4 0-5.2-.1 6 6 13.6 10.7 27.5 10.8h3.1z"></path><path fill="#D4EEF1" d="M46.1 89.9c-.9-1.3-1.8-2.8-2.5-4.3-2.5.7-5.5 1.2-8.9 1.4 2.3 1.2 5.7 2.4 11.4 2.9z"></path>
                </svg>
                <span>CI/CD, Docker, provisioning servers, devops</span>
            </li>
            <li>
                <svg viewBox="0 0 31 32">
                    <path fill="#363640" d="M0.211 5.646c-0.847 0.848-0.666 2.042 0.008 2.715 0.027 0.026 2.734 2.612 6.541 6.419 0.098 0.098 0.226 0.146 0.354 0.146s0.256-0.049 0.354-0.146c0.195-0.195 0.195-0.512 0-0.707-0.574-0.574-1.12-1.117-1.638-1.631l1.589-1.589c0.195-0.195 0.195-0.512 0-0.707s-0.512-0.195-0.707 0l-1.593 1.593c-0.891-0.88-1.676-1.648-2.315-2.271l3.615-3.615c0.195-0.195 0.195-0.512 0-0.707s-0.512-0.195-0.707 0l-3.626 3.626c-0.736-0.713-1.16-1.118-1.167-1.125-0.211-0.211-0.488-0.805 0-1.293l5-5c0.193-0.196 0.707-0.585 1.271-0.024 0.025 0.028 2.55 2.896 6.404 6.75 0.195 0.195 0.512 0.195 0.707 0s0.195-0.512 0-0.707c-3.83-3.829-6.336-6.675-6.382-6.727-0.932-0.93-2.056-0.651-2.707 0l-5.001 5zM21.419 24.146c-0.195-0.195-0.512-0.195-0.707 0l-1.591 1.59c-0.485-0.491-0.994-1.005-1.53-1.541-0.195-0.195-0.512-0.195-0.707 0s-0.195 0.512 0 0.707c3.704 3.703 6.291 6.469 6.328 6.509 0.343 0.344 0.813 0.533 1.323 0.533v0c0.525 0 1.056-0.205 1.385-0.535l4.998-5.057c0.629-0.629 0.665-1.696 0.078-2.285l-6.706-6.705c-0.195-0.195-0.512-0.195-0.707 0s-0.195 0.512 0 0.707l6.706 6.705c0.2 0.2 0.162 0.632-0.079 0.873l-4.999 5.057c-0.115 0.116-0.376 0.24-0.676 0.24 0 0 0 0 0 0-0.172 0-0.418-0.042-0.604-0.229-0.010-0.011-0.429-0.458-1.156-1.219l3.644-3.644c0.195-0.195 0.195-0.512 0-0.707s-0.512-0.195-0.707 0l-3.629 3.629c-0.624-0.649-1.389-1.438-2.26-2.326l1.596-1.596c0.195-0.194 0.195-0.51 0-0.706zM-0.293 31.829c0.096 0.098 0.225 0.15 0.358 0.15 0.048 0 0.096-0.007 0.143-0.021l10-2.979c0.081-0.024 0.153-0.067 0.212-0.127l17.090-17.205c0.024-0.024 0.036-0.055 0.054-0.082l3.656-3.656c0.294-0.295 0.457-0.686 0.457-1.103s-0.163-0.807-0.457-1.1l-5.235-5.234c-0.588-0.588-1.615-0.588-2.203 0l-3.739 3.739c-0.024 0.024-0.037 0.055-0.055 0.083l-17.116 17.117c-0.056 0.056-0.098 0.124-0.122 0.199l-3.16 9.715c-0.058 0.177-0.013 0.37 0.117 0.504zM20.425 5.271l1.039 1.039-15.523 15.565-1.727-0.392 16.211-16.212zM6.565 22.666l15.607-15.648 2.436 2.436-15.748 15.546h-2.295v-2.334zM26.449 11.296l-16.244 16.354-0.577-2.002 15.687-15.487 1.134 1.135zM3.558 22.359l2.007 0.456v2.685c0 0.276 0.224 0.5 0.5 0.5h2.624l0.634 2.2-8.488 2.529 2.723-8.37zM24.49 1.179c0.211-0.211 0.578-0.211 0.789 0l5.235 5.235c0.105 0.105 0.163 0.245 0.163 0.394 0 0.148-0.058 0.289-0.164 0.395l-3.371 3.372-6.023-6.023 3.371-3.373z"></path>
                </svg>
                <span>Design patterns and SOLID principles</span>
            </li>
            <li>
                <svg viewBox="0 0 32 32">
                    <path fill="#00A80C" d="M20.682 3.732c-0.473-0.472-1.1-0.732-1.768-0.732s-1.295 0.26-1.77 0.733l-1.41 1.412c-0.473 0.472-0.734 1.1-0.734 1.769 0 0.471 0.129 0.922 0.371 1.313l-13.577 5.439c-0.908 0.399-1.559 1.218-1.742 2.189-0.185 0.977 0.125 1.979 0.834 2.687l12.72 12.58c0.548 0.548 1.276 0.859 2.045 0.877 0.018 0.001 0.060 0.001 0.078 0.001 0.202 0 0.407-0.021 0.61-0.062 0.994-0.206 1.808-0.893 2.177-1.828l5.342-13.376c0.402 0.265 0.875 0.407 1.367 0.407 0.67 0 1.297-0.261 1.768-0.733l1.407-1.408c0.477-0.474 0.738-1.103 0.738-1.773s-0.262-1.3-0.732-1.768l-7.724-7.727zM16.659 29.367c-0.124 0.313-0.397 0.544-0.727 0.612-0.076 0.016-0.153 0.022-0.229 0.021-0.254-0.006-0.499-0.108-0.682-0.292l-12.728-12.588c-0.234-0.233-0.337-0.567-0.275-0.893 0.061-0.324 0.279-0.598 0.582-0.73l6.217-2.49c4.189 1.393 8.379 0.051 12.57 4.522l-4.728 11.838zM26.992 13.58l-1.414 1.413c-0.195 0.196-0.512 0.196-0.707 0l-1.768-1.767-1.432 3.589 0.119-0.303c-3.010-3.005-6.069-3.384-8.829-3.723-0.887-0.109-1.747-0.223-2.592-0.405l8.491-3.401-1.715-1.715c-0.195-0.195-0.195-0.512 0-0.707l1.414-1.415c0.195-0.195 0.512-0.195 0.707 0l7.725 7.727c0.198 0.195 0.198 0.512 0.001 0.707zM16.5 21c1.378 0 2.5-1.121 2.5-2.5s-1.121-2.5-2.5-2.5c-1.379 0-2.5 1.121-2.5 2.5s1.122 2.5 2.5 2.5zM16.5 17c0.828 0 1.5 0.672 1.5 1.5s-0.672 1.5-1.5 1.5c-0.829 0-1.5-0.672-1.5-1.5s0.671-1.5 1.5-1.5zM29.5 0c-1.379 0-2.5 1.121-2.5 2.5s1.121 2.5 2.5 2.5 2.5-1.121 2.5-2.5-1.121-2.5-2.5-2.5zM29.5 4c-0.828 0-1.5-0.672-1.5-1.5s0.672-1.5 1.5-1.5 1.5 0.672 1.5 1.5-0.672 1.5-1.5 1.5zM8 17c0 1.103 0.897 2 2 2s2-0.897 2-2-0.897-2-2-2-2 0.897-2 2zM10 16c0.552 0 1 0.447 1 1s-0.448 1-1 1-1-0.447-1-1 0.448-1 1-1zM12 23c0-0.552 0.448-1 1-1s1 0.448 1 1c0 0.552-0.448 1-1 1s-1-0.448-1-1zM28 8c0-0.552 0.448-1 1-1s1 0.448 1 1c0 0.552-0.448 1-1 1s-1-0.448-1-1z"></path>
                </svg>
                <span>Test Driven Development</span>
            </li>
            <li>
                <svg viewBox="0 0 20 20">
                    <path fill="#564DFF" d="M18 14.824v-2.324c0-1.933-1.567-3.5-3.5-3.5h-2c-0.828 0-1.5-0.672-1.5-1.5v-2.324c0.825-0.38 1.4-1.208 1.4-2.176 0-1.326-1.074-2.4-2.4-2.4s-2.4 1.074-2.4 2.4c0 0.967 0.576 1.796 1.4 2.176v2.324c0 0.828-0.672 1.5-1.5 1.5h-2c-1.933 0-3.5 1.567-3.5 3.5v2.324c-0.825 0.38-1.4 1.209-1.4 2.176 0 1.326 1.074 2.4 2.4 2.4s2.4-1.075 2.4-2.4c0-0.967-0.576-1.796-1.4-2.176v-2.324c0-0.828 0.672-1.5 1.5-1.5h2c0.539 0 1.044-0.132 1.5-0.35v4.174c-0.825 0.38-1.4 1.209-1.4 2.176 0 1.326 1.074 2.4 2.4 2.4s2.4-1.075 2.4-2.4c0-0.967-0.576-1.796-1.4-2.176v-4.174c0.456 0.218 0.961 0.35 1.5 0.35h2c0.828 0 1.5 0.672 1.5 1.5v2.324c-0.825 0.38-1.4 1.208-1.4 2.176 0 1.326 1.074 2.4 2.4 2.4s2.4-1.075 2.4-2.4c0-0.967-0.575-1.796-1.4-2.176zM10 1.615c0.764 0 1.384 0.619 1.384 1.385 0 0.764-0.62 1.385-1.384 1.385s-1.384-0.621-1.384-1.385c0-0.766 0.619-1.385 1.384-1.385zM3 18.385c-0.766 0-1.385-0.621-1.385-1.385 0-0.766 0.619-1.385 1.385-1.385 0.764 0 1.384 0.619 1.384 1.385 0 0.764-0.62 1.385-1.384 1.385zM10 18.385c-0.766 0-1.385-0.621-1.385-1.385 0-0.766 0.619-1.385 1.385-1.385 0.764 0 1.384 0.619 1.384 1.385 0 0.764-0.62 1.385-1.384 1.385zM17 18.385c-0.766 0-1.385-0.621-1.385-1.385 0-0.766 0.619-1.385 1.385-1.385 0.764 0 1.384 0.619 1.384 1.385 0 0.764-0.62 1.385-1.384 1.385z"></path>
                </svg>
                <span>Algorithms and data structures</span>
            </li>
            <li>
                <svg viewBox="0 0 32 32">
                    <path fill="#e10098" style="fill: var(--color4, #e10098)" d="M18.735 3.668l6.58 3.8c1.088-1.145 2.897-1.191 4.043-0.103 0.197 0.187 0.365 0.401 0.503 0.636 0.785 1.371 0.309 3.119-1.061 3.904-0.232 0.133-0.481 0.233-0.744 0.297v7.599c1.528 0.364 2.472 1.897 2.107 3.425-0.064 0.272-0.169 0.533-0.309 0.775-0.789 1.364-2.535 1.832-3.903 1.043-0.261-0.151-0.5-0.345-0.701-0.572l-6.54 3.776c0.496 1.499-0.317 3.113-1.815 3.608-0.289 0.095-0.589 0.144-0.893 0.144-1.575 0.001-2.852-1.273-2.853-2.848 0-0.273 0.039-0.547 0.117-0.812l-6.581-3.796c-1.088 1.139-2.895 1.183-4.035 0.093-1.139-1.088-1.181-2.895-0.093-4.035 0.377-0.396 0.861-0.675 1.392-0.804l0.001-7.599c-1.533-0.368-2.477-1.911-2.108-3.445 0.063-0.264 0.164-0.519 0.299-0.755 0.789-1.365 2.536-1.832 3.903-1.043 0.236 0.135 0.452 0.304 0.64 0.503l6.584-3.8c-0.448-1.511 0.415-3.096 1.921-3.543 0.263-0.079 0.539-0.117 0.813-0.117 1.575-0.001 2.852 1.272 2.853 2.845 0.001 0.279-0.040 0.557-0.119 0.823zM18.048 4.837c-0.025 0.028-0.049 0.052-0.077 0.077l8.615 14.92c0.035-0.012 0.075-0.021 0.109-0.031v-7.609c-1.527-0.377-2.456-1.923-2.077-3.451 0.008-0.032 0.016-0.065 0.025-0.096l-6.595-3.811zM14.028 4.916l-0.080-0.080-6.595 3.803c0.436 1.513-0.436 3.091-1.948 3.527-0.035 0.011-0.068 0.019-0.101 0.028v7.611l0.112 0.031 8.612-14.919zM16.796 5.592c-0.52 0.149-1.071 0.149-1.589 0l-8.613 14.919c0.392 0.377 0.669 0.86 0.8 1.388h17.215c0.129-0.531 0.409-1.015 0.804-1.392l-8.616-14.915zM18.111 27.228l6.551-3.784c-0.020-0.063-0.036-0.125-0.051-0.189h-17.221l-0.028 0.111 6.585 3.803c0.517-0.539 1.245-0.871 2.053-0.871 0.836 0 1.587 0.359 2.111 0.931z"></path>
                </svg>
                <span>API design and system integrations</span>
            </li>
            <li>
                <svg viewBox="0 0 32 32">
                    <path fill="#cc342d" style="fill: var(--color6, #cc342d)" d="M26.875 0.111c4.044 0.7 5.191 3.464 5.105 6.36l0.020-0.041-1.82 23.851-23.639 1.621c-1.964-0.083-6.341-0.263-6.541-6.383l2.193-4 4.429 10.344 3.74-12.192-0.040 0.009 0.021-0.040 12.34 3.941-1.861-7.241-1.32-5.2 11.76-0.759-0.82-0.68-8.443-6.883 4.879-2.721-0.004 0.013zM0 25.452v0zM6.84 6.764c4.748-4.711 10.876-7.495 13.229-5.12 2.349 2.369-0.14 8.14-4.897 12.848-4.751 4.709-10.804 7.645-13.152 5.276-2.355-2.369 0.060-8.289 4.816-13l0.004-0.004z"></path>
                </svg>
                <span>Tinkering with Assembly, C, Rust, Ruby, Python, C#</span>
            </li>
            <li>
                <svg viewBox="0 0 128 128">
                    <path fill="#001d26" fill-rule="evenodd" clip-rule="evenodd" d="M50.246 41.616c-3.682-.925-7.369-.628-11.26-.022 0 6.805-.014 13.427.037 20.05.002.339.511.929.841.974 4.243.573 8.463.619 12.431-1.315 4.105-2 6.196-6.182 5.654-11.092-.492-4.471-3.139-7.448-7.703-8.595zM127 63.963v-60.678c0-2.096.023-2.285-2.012-2.285h-121.509c-1.979 0-2.479.19-2.479 2.186v121.509c0 2.018.252 2.021 2.209 2.021 40.555.001 81.231-.009 121.786.037 1.573.002 1.995-.417 1.991-1.959-.054-20.277.014-40.556.014-60.831zm-70.648 5.84c-5.557 1.982-11.352 2.093-17.352 1.628v22.569h-11v-1.402c0-18.895-.087-37.788-.14-56.682-.006-1.569.243-2.327 2.011-2.507 8.332-.852 16.617-1.81 24.902.133 8.906 2.087 14.041 7.975 14.431 16.11.483 10.074-3.944 16.974-12.852 20.151zm44.31 12.754c-.424 5.771-3.678 9.56-9.015 11.392-7.142 2.452-14.245 1.883-21.225-.891-1.143-.455-1.364-1.031-.987-2.196.687-2.126 1.19-4.312 1.72-6.286 2.951.866 5.757 1.947 8.664 2.458 2.053.361 4.272.149 6.359-.178 1.871-.294 3.217-1.564 3.524-3.572.312-2.041-.303-3.809-2.105-4.895-1.432-.862-3.01-1.479-4.523-2.202-2.433-1.163-5.026-2.075-7.27-3.53-8.831-5.727-5.956-16.383-.063-20.396 3.153-2.146 6.642-3.098 10.377-3.229 4.393-.154 8.623.604 12.778 2.623l-2.195 7.789c-1.74-.616-3.36-1.416-5.07-1.734-2.029-.378-4.157-.589-6.205-.422-2.746.225-4.354 2.12-4.354 4.47 0 1.392.528 2.57 1.689 3.245 1.666.969 3.434 1.768 5.186 2.579 1.896.877 3.898 1.551 5.723 2.552 4.87 2.67 7.405 6.8 6.992 12.423z"></path>
                </svg>
                <span>
                    Web design: in-browser, Figma, Adobe suite
                    <small>(I don’t get to use much anymore 🙁)</small>
                </span>
            </li>
            <li>
                <svg viewBox="0 0 32 32">
                    <path fill="#ee672f" style="fill: var(--color5, #ee672f)" d="M16 32l-5.94-3.429v-16l3.96-2.287v16.001l1.98 1.203 1.98-1.203v-16.001l3.961 2.287v16l-5.941 3.429zM29.855 8v16l-3.959 2.285v-16.001l-9.896-5.711-9.901 5.711v16.001l-3.953-2.285v-16l13.855-8 13.855 8z"></path>
                </svg>
                <span>
                    Magento, Wordpress, ExpressionEngine
                    <small>(I don’t have to use at all anymore 😃)</small>
                </span>
            </li>
        </ul>
    </div>
    <div class="mt-8"></div>
@endsection
