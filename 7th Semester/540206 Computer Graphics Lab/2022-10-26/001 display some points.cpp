#include<windows.h>
#include<math.h>
#include<GL/glut.h>

void myInit()
{
    glClearColor(1.0,1.0,1.0,1.0);
    glColor3f(0.0f,0.0f,0.0f);

    glMatrixMode(GL_PROJECTION);
    glLoadIdentity();
    gluOrtho2D(0.0,640.0,0.0,480.0);
}

void myDisplay()
{
    glClear(GL_COLOR_BUFFER_BIT);
    glPointSize(2.0);



    glBegin(GL_POINTS);
    {
        glVertex2i(50,100);
        glVertex2i(50,150);
        glVertex2i(50,200);
        glVertex2i(50,250);
    }
    glEnd();



    glFlush();
}

int main(int argc,char** argv)
{
    glutInit(&argc,argv);
    glutInitDisplayMode(GLUT_SINGLE|GLUT_RGB);
    glutInitWindowSize(640,480);
    glutInitWindowPosition(100,150);
    glutCreateWindow("Line draw using line equation\n");
    glutDisplayFunc(myDisplay);
    myInit();
    glutMainLoop();
    return 1;
}
